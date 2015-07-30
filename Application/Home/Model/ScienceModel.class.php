<?php
namespace Home\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/30
 * Time: 17:17
 */
 class ScienceModel extends  Model
 {
     /**
      * @param $attr_value
      * @return mixed
      * 根据类型值获取信息
      */
     function getByValue($attr_value)
     {
         $where=array('attr_value'=>$attr_value,'marks'=>0);
         return $this->where($where)->select();
     }
 }