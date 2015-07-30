<?php
namespace Home\Controller;
use Home\Model\NoticeModel;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/29
 * Time: 16:48
 */
class ChargesController extends HomeController
{
    function index()
    {
        $Notice=new NoticeModel();
        $NoticeBZJ=$Notice->getByType(6);
        $NoticeJSFWF=$Notice->getByType(7);
        $ChargeStandard=$Notice->getByTypeRange();
        $this->assign('charge_standard',$ChargeStandard);
        $this->assign('NoticeBZJ',$NoticeBZJ[0]);
        $this->assign('NoticeJSFWF',$NoticeJSFWF[0]);
        $this->assign('title','资费标准');
        $this->display();
    }
}