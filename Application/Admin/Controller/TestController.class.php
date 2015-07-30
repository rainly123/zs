<?php
namespace Admin\Controller;
/**
 *
 * Created by PhpStorm.
 * User: congsheng
 * Date: 2015/7/29
 * Time: 21:37
 */
class TestController extends AdminController
{
    function add()
    {
        $this->display();
    }


    function save()
    {
        $Brand = D('Brand');
        $data = $Brand->create();
        if($data){
            $id = $Brand->add();
            if($id){
                // S('DB_CONFIG_DATA',null);
                //记录行为
                action_log('update_menu', 'Menu', $id, UID);
                $this->success('新增成功', Cookie('__forward__'));
            } else {
                $this->error('新增失败');
            }
        } else {
            $this->error($Brand->getError());
        }
//        if(IS_POST){
//
//        } else {
//            $this->assign('info',array('pid'=>I('pid')));
//            $menus = M('Menu')->field(true)->select();
//            $menus = D('Common/Tree')->toFormatTree($menus);
//            $menus = array_merge(array(0=>array('id'=>0,'title_show'=>'顶级菜单')), $menus);
//            $this->assign('Menus', $menus);
//            $this->meta_title = '新增菜单';
//            $this->display('edit');
//        }
    }
}