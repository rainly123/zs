<?php
namespace Admin\Controller;
use Admin\Model\AutoattributeModel;
use Admin\Model\ScienceModel;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/29
 * Time: 10:54
 */
 class ScienceController extends AdminController
 {
     /**
      * 渲染招商材料首页
      */
     function index()
     {
         $map=array('marks'=>0);
         $list   = $this->lists('Science', $map);
         $this->assign('_list',$list);
         $this->display();
     }

     /**
      * 创建
      */
     function create()
     {
         $ParentId=I('get.value');
         $Attribute=new AutoattributeModel();
         //根据父属性获取子属性
         $AttrChild=$Attribute->getByPid($ParentId);
         //获取父属性
         $AttrParent=$Attribute->getParentAttr('science');
         $this->assign('action','create');
         $this->assign('AttrParent',$AttrParent);
         $this->assign('AttrChild',$AttrChild);
         $this->assign('parent_id',$ParentId);
         $this->display('edit');
     }

     /**
      *保存
      */
     function save()
     {
         $Attribute=new AutoattributeModel();
         $data['attr_value']=I('post.child');
         $data['attr_name']=$Attribute->getAttrName('science',$data['attr_value']);
         $data['sc_title']=I('post.sc_title');
         $data['sc_content']=I('post.sc_content');
         $data['update_time']=$this->getCurrentTime();
         $action=I('post.HDaction');
         $Science=M('Science');
         if($action=='create')
         {
             $data['create_time']=$this->getCurrentTime();
            $result= $Science->add($data);
             if($result>0)
             {
                 $this->success('保存成功',U('Science/index'));
             }
             else
             {
                 $this->error('保存失败');
             }

         }
         elseif($action=='edit')
         {
              $id=I('post.HDid');
//              $this->success($id);
              $result=$Science->where('id='.$id)->save($data);
              if($result>0)
              {
                  $this->success('更新成功',U('Science/index'));
              }
             else
             {
                 $this->error('更新失败');
             }
         }

     }

     /**
      * 编辑
      */
     function edit()
     {
         $ParentId=I('get.value');
         $id=I('get.id');
         $Attribute=new AutoattributeModel();
         $Science=new ScienceModel();
         $Science_info=$Science->getById($id);
         //获取父属性
         //根据父属性获取子属性
         $AttrChild=$Attribute->getByPid($ParentId);
         //获取父属性
         $AttrParent=$Attribute->getParentAttr('science');
         $this->assign('science_info',$Science_info[0]);
         $this->assign('id',$id);
         $this->assign('AttrParent',$AttrParent);
         $this->assign('AttrChild',$AttrChild);
         $this->assign('action','edit');
         $this->assign('parent_id',$ParentId);
         $this->display();
     }


     function remove()
     {
         $id=I('get.id');
         $Science=D('Science');
         $map=array('id'=>$id,'marks'=>1);
         $result=$Science->save($map);
         if($result>0)
         {
             $this->success('移除成功');
         }
     }
 }