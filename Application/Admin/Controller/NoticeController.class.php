<?php
namespace Admin\Controller;
use Admin\Model\AutoattributeModel;
use Admin\Model\NoticeModel;
use Home\Controller\HomeController;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/29
 * Time: 17:39
 */
class NoticeController extends AdminController
{
    /**
     * 渲染新闻管理首页
     */
    function index()
    {
        $type=I('get.type');
        $key=I('get.key');

//        echo $type;
//        die();
        $Notice=new NoticeModel();
        $attribute=new AutoattributeModel();
        $NoticeType=$attribute->getAttrBy_Type_Value('notice');
        $this->assign('notice_type',$NoticeType);
        //获取新闻列表
        if(empty($type)&&empty($key))
        {
            $NoticeList=$this->lists('Notice',array('marks'=>0));
        }
        elseif(empty($type)&&!empty($key))
        {
            $NoticeList=$Notice->where('notice_title like '.$key.' or notice_content like '.$key.'')->select();
        }
        elseif(!empty($type)&&empty($key))
        {
            $NoticeList=$Notice->where('notice_type='.$type)->select();
        }
        else
        {
            $NoticeList=$Notice->where('notice_type='.$type.' and notice_title like '%".$key."%' or notice_content like '%".$key."%'')->select();
        }
        $this->assign('notice_list',$NoticeList);
        $this->display();
    }

    function create()
    {
        $AutoAttr=new AutoattributeModel();
        $NoticeType=$AutoAttr->getAttrBy_Type_Value('notice');
        $this->assign('notice_type',$NoticeType);
        $this->assign('action','create');
        $this->display('edit');
    }

    /**
     * 编辑
     */
    function edit()
    {
        $id=I('get.id');
        $AutoAttr=new AutoattributeModel();
        $Notice=new NoticeModel();
        $notice_info=$Notice->getById($id);
        $NoticeType=$AutoAttr->getAttrBy_Type_Value('notice');
        $this->assign('notice_info',$notice_info[0]);
        $this->assign('notice_type',$NoticeType);
        $this->assign('id',$id);
        $this->assign('action','edit');
        $this->display();
    }

    /**
     * 移除
     */
    function remove()
    {
       $id=I('get.id');
    }

    /**
     *
     * 保存新闻信息
     */
    function save()
    {
        $action=I('post.HDaction');
        $Notice=D('Notice');
        $AutoAttr=new AutoattributeModel();
        $id=I('post.HDid');
        $data['notice_title']=I('post.notice_title');
        $data['notice_type']=I('post.notice_type');
        $data['notice_discript']=I('post.notice_descript');
        $data['notice_content']=I('post.notice_content');
        $data['notice_type_name']= $AutoAttr->getAttrName('notice',$data['notice_type']);
        if('create'==$action)
        {
           $data['creator']= UID;
           $data['create_time']=$this->getCurrentTime();
           $data['update_time']=$this->getCurrentTime();
           $vail=$Notice->create($data);
           if($vail)
           {
               $id=$Notice->add();
               if($id>0)
               {
                   $this->success('创建成功',U('Notice/index'));
               }
           }
           else
           {
                $this->error($Notice->getError());
           }
        }
        elseif('edit'==$action)
        {
            $data['update_time']=$this->getCurrentTime();
            $vail=$Notice->create($data);
            if($vail)
            {
               $result= $Notice->where('id='.$id.'')->save($data);
                if($result>0)
                {
                    $this->success('更新成功！',U('Notice/index'));
                }
            }
            else
            {
                $this->error($Notice->getError());
            }
        }
    }

}