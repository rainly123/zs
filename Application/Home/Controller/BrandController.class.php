<?php
namespace Home\Controller;
use Home\Model\BrandModel;
use Home\Model\NoticeModel;

/**
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/29
 * Time: 11:03
 */
class BrandController extends HomeController
{
    /**
     *
     */
    function index()
    {
        $Notice=new NoticeModel();
        $BrandNotice=$Notice->getByType(1);
        $BrandQJ=$Notice->getByType(2);
        $BrandZM=$Notice->getByType(3);
        $BrandZY=$Notice->getByType(4);
        $Brand=new BrandModel();
        $BrandSYC=$Brand->getBrandByType(1);
        $BrandLT=$Brand->getBrandByType(2);
        $BrandYP=$Brand->getBrandByType(3);
        $BrandLBJ=$Brand->getBrandByType(4);
        $BrandCCSB=$Brand->getBrandByType(5);
        $this->assign('BrandSYC',$BrandSYC);
        $this->assign('BrandLT',$BrandLT);
        $this->assign('BrandYP',$BrandYP);
        $this->assign('BrandLBJ',$BrandLBJ);
        $this->assign('BrandCCSB',$BrandCCSB);

        $this->assign('banrd_notice',$BrandNotice[0]);
        $this->assign('BrandQJ',$BrandQJ[0]);
        $this->assign('BrandZM',$BrandZM[0]);
        $this->assign('BrandZY',$BrandZY[0]);
        $this->assign('title','招商品牌');
         $this->display();
    }

    public function banner1()
    {
        $Notice=new NoticeModel();
        $BrandNotice=$Notice->getByType(1);
        $BrandQJ=$Notice->getByType(2);
        $BrandZM=$Notice->getByType(3);
        $BrandZY=$Notice->getByType(4);
        $Brand=new BrandModel();
        $BrandSYC=$Brand->getBrandByType(1);
        $BrandLT=$Brand->getBrandByType(2);
        $BrandYP=$Brand->getBrandByType(3);
        $BrandLBJ=$Brand->getBrandByType(4);
        $BrandCCSB=$Brand->getBrandByType(5);
        $this->assign('BrandSYC',$BrandSYC);
        $this->assign('BrandLT',$BrandLT);
        $this->assign('BrandYP',$BrandYP);
        $this->assign('BrandLBJ',$BrandLBJ);
        $this->assign('BrandCCSB',$BrandCCSB);

        $this->assign('banrd_notice',$BrandNotice[0]);
        $this->assign('BrandQJ',$BrandQJ[0]);
        $this->assign('BrandZM',$BrandZM[0]);
        $this->assign('BrandZY',$BrandZY[0]);
        $this->assign('title','招商品牌');
        $this->display();
    }
}