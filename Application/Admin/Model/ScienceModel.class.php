<?php
namespace Admin\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/29
 * Time: 11:35
 */
 class ScienceModel extends Model
 {
     protected $validate  = array(
         array('attr_value','require','attr_value必须填写'),
         array('sc_title','require','sc_title必须填写'),
         array('sc_content','require','sc_content必须填写')
     );


     function getById($id)
     {
         $where=array('id'=>$id,'marks'=>0);
         return $this->where($where)->select();
     }



 }