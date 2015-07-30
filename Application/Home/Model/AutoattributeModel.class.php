<?php
namespace Home\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/30
 * Time: 15:01
 */
class AutoattributeModel extends Model
{
    function getScience()
    {
        $all=array();
        $list=array();
        $last=null;
        $where='attr_type="science" and attr_pid=0 and marks=0';
        $result= $this->where($where)->order('attr_pid asc')->select();
        foreach($result as $val)
        {
           $parent=$this->where(array('id'=>$val['id'],'marks'=>0))->select();
           $child=$this->where(array('attr_pid'=>$val['id'],'marks'=>0))->select();
           $all=array_merge($parent,$child);
           array_push($list,$all);
            $last=$list;

        }
        return $last;

    }

    function getAttrByPid($pid)
    {
        $where=array('attr_pid'=>$pid,'marks'=>0);
        $result=$this->where($where)->select();
        return $result;
    }
}
