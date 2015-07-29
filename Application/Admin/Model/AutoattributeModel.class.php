<?php
namespace Admin\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/28
 * Time: 13:50
 */
class AutoattributeModel extends Model
{
    /**
     * 根據屬性類型获取属性信息
     */
    function getAttrBy_Type_Value($type)
    {
        $where=array('attr_type'=>$type);
        $result=$this->where($where)->select();
        return $result;
    }
}