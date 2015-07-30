<?php
namespace Home\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/30
 * Time: 13:11
 */
class NoticeModel extends  Model
{
    /**
     * 通过Type获取 新闻信息
     */
    function getByType($notice_type)
    {
        $where=array('marks'=>0,'notice_type'=>$notice_type);
        $result=$this->where($where)->limit(1)->select();
        return $result;
    }


    function getByTypeRange()
    {
        $where='notice_type BETWEEN 10 AND 90 AND marks=0';
        $result=$this->where($where)->select();
        return $result;
    }

}