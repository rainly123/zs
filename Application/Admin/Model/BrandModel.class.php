<?php
namespace Admin\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/28
 * Time: 15:48
 */
class BrandModel extends Model
{
    /**
     * 通过品牌类型查询品牌信息
     */
    function getBrandByType($type)
    {
        $where=array('attr_value'=>$type,'marks'=>0);
        $result=$this->where($where)->select();
        return $result;
    }


    /**
     * 根据id获取品牌信息
     */
    function  getById($id)
    {
      $where=array('marks'=>0,'id'=>$id);
      return   $this->where($where)->select();
    }
}
