<?php
namespace Home\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/30
 * Time: 13:35
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
}