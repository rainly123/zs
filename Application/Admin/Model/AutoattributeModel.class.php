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
        $where=array('attr_type'=>$type,'marks'=>0);
        $result=$this->where($where)->select();
        return $result;
    }

    /**
     * 根据父id获取属性信息
     */
    function getByPid($pid)
    {
        if($pid==0||empty($pid))
        {
           $pid=6;
        }
        $where=array('attr_pid'=>$pid,'marks'=>0);
        $result=$this->where($where)->select();
        return $result;
    }

    /**
     * 获取父属性
     */
    function getParentAttr($attr_type)
    {
        $where=array('attr_type'=>$attr_type,'attr_pid'=>0,'marks'=>0);
        $result=$this->where($where)->select();
        return $result;
    }

    /**
     * 获取属性名称
     */
    function getAttrName($attr_type,$attr_value)
    {
        $where=array('attr_type'=>$attr_type,'attr_value'=>$attr_value,'marks'=>0);
        $result=$this->where($where)->select();
        return $result[0]['attr_name'];
    }

}