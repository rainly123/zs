<?php
namespace Admin\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/30
 * Time: 9:49
 */
class NoticeModel extends Model
{
    protected $_validate = array(
        array('notice_title','require','标题必须填写'), //默认情况下用正则进行验证
        array('notice_content','require','内容必须填写'),
    );


    function getById($id)
    {
        $where=array('id'=>$id,'marks'=>0);
        return $this->where($where)->select();
    }
}