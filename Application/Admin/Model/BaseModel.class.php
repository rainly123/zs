<?php
namespace Admin\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/28
 * Time: 16:39
 */
 class BaseMode extends  Model
 {
     /**
      * 根据ID获取信息
      */
     function getById($id)
     {
         $where=array('id'=>$id,'marks'=>0);
         $result=$this->where($where)->select();
         return $result;
     }
 }