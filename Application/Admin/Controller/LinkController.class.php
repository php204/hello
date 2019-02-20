<?php
namespace admin\Controller;
use Think\Controller;
class LinkController extends Controller {
    public function __construct(){
      parent::__construct();
      if (!session('id')) {
           $this->error('请先登录系统',U('Login/index'));
      }
  }
 //栏目的列表页面
    public function link_list(){
        $link  = D('link');
        $count = $link->count();
        $Page  = new \Think\Page($count,2);
        $show  = $Page->show();
        $list = $link->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
 //栏目添加页面转跳及验证
    public function link_add(){
        $link = D('link');
         if (IS_POST) {
                $data['title']=I('title');
                $data['url']=I('url');
                $data['desc']=I('editorValue');

            if ($link->create($data)) {

                        if ($link->add()) {
                                $this->success('添加链接成功！',U('link_list'));          
                            }else{
                                $this->success('添加链接失败',U('link_list'));
                            }

                }else{
                      $this->error($link->getError());
                }
                return;
        }
 
        $this->display();
    }
   
   //栏目排序
    public function link_sort(){

         $cate=D('link');
         foreach ($_POST as $id => $sort) {
               $cate->where(array('id'=>$id))->setField('sort',$sort);
         }
         $this->success('排序成功',U('link_list'));

    }
    //删除
    public function link_del(){
         $link=D('link');
         if ($link->delete(I('id'))) {
             $this->success('删除成功',U('link_list'));
         }else{
             $this->error('删除失败',U('link_list'));
         }

    }

    //修改
    public function link_edit(){
         $link=D('link');
         if (IS_POST) {
            $data['title']=I('title');
            $data['url']=I('url');
            $data['desc']=I('editorValue');
            $data['id']=I('id');
            if ($link->create($data)) {
                $save=$link->save();
                 if ($save !== false) {
                      $this->success('修改成功',U('link_list'));
                 }else{
                      $this->error('修改失败',U('slink_list'));
                 }

            }else{
                 $this->error($link->getError());
            }

             return;
         }
         $links=$link->find(I('id'));
         $this->assign('links',$links);
         $this->display();
    
    }

}