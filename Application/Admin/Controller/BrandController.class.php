<?php
namespace Admin\Controller;
use Admin\Model\AutoattributeModel;
use Admin\Model\BrandModel;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/28
 * Time: 14:00
 */
 class BrandController extends AdminController
 {
     /**
      * 渲染品牌管理页面首页
      */
      public function index()
      {
          $value=I('get.value');
          if(empty($value))
          {
              $value=1;
          }
          $auto_attr=new AutoattributeModel();
          $brand_type=$auto_attr->getAttrBy_Type_Value('brand_type');
          $map=array('attr_value'=>$value,'marks'=>0);
          $Brandlist   = $this->lists('Brand', $map);
          //品牌信息列表
          $this->assign('brand_list',$Brandlist);
          $this->assign('brandvalue',$value);
          //品牌类型列表
          $this->assign('brand_type_list',$brand_type);
          $this->display();
      }

     /**
      * 编辑产品信息
      */
      public function edit()
      {
          $id=I('get.id');
          $Brand=new BrandModel();
          $result=$Brand->getById($id);
          $this->assign('action','edit');
          $this->assign('id',$id);
          $this->assign('brand',$result[0]);
          $this->display();
      }

      public function remove()
      {

      }

      public function create()
      {
          $type=I('get.value');
          $this->assign('brand_type',$type);
          $this->assign('action','create');
          $this->display('edit');
      }

     public function save()
     {
         $id=I('post.id');
         $action=I('post.HDaction');
//         $this->error($action);
         $brand=M('Brand');
         if($action=='edit')
         {
            $data['br_name']=I('post.name');
            $data['update_time']=$this->getCurrentTime();
            $result=$brand->where('id='.$id.'')->save($data);
            if($result>0)
            {
                $this->success('更新成功',Cookie('__forward__'));
            }
         }
         elseif($action=='create')
         {
             $data['br_name']=I('post.name');
             $data['create_time']=$this->getCurrentTime();
             $data['attr_value']=$this->I('post.HDAttr_value');
             $data['update_time']=$this->getCurrentTime();
             $result=$brand->create($data);
             if($result>0)
             {
                 $this->success('数据写入成功', Cookie('__forward__'));
             }
         }

     }
 }