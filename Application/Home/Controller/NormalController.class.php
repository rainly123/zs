<?php
namespace Home\Controller;
use Home\Model\AutoattributeModel;
use Home\Model\NoticeModel;
use Home\Model\ScienceModel;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/29
 * Time: 16:40
 */
class NormalController extends HomeController
{
    public function index()
    {
        $Notice=new NoticeModel();
        $AutoAttribute=new AutoattributeModel();

        $charge=new ScienceModel();
        $ChargeNotice=$charge->getByValue(110);
        $this->assign('charge_notice',$ChargeNotice[0]);
        $Science=$AutoAttribute->getScience();
        $this->assign('science',$Science);

        $BrandQJ=$Notice->getByType(2);
        $BrandZM=$Notice->getByType(3);
        $BrandZY=$Notice->getByType(4);
        $this->assign('BrandQJ',$BrandQJ[0]);
        $this->assign('BrandZM',$BrandZM[0]);
        $this->assign('BrandZY',$BrandZY[0]);

        $Nomalnotice=$Notice->getByType(5);
        $this->assign('nomal_notice',$Nomalnotice[0]);
        $this->assign('title','招商标准');
        $this->display();
    }


    /**
     * 获取新闻内容AJAX
     */
    function getNoticeAjax()
    {
        $val=I('post.val');
        $Notice=new ScienceModel();
        $ChargeNotice=$Notice->getByValue($val);
        $json=json_encode($ChargeNotice[0]);
        echo $json;
    }
}