<?php
namespace admin\Controller;
use Think\Controller;
class NavigationController extends Controller {
     public function __construct(){
      parent::__construct();
      if (!session('id')) {
           $this->error('请先登录系统',U('Login/index'));
      }
  }
 //栏目的列表页面
    public function cate_list(){
        $cate = D('navigation');
        $cateres=$cate->order('id desc')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }
 //栏目添加页面转跳及验证
    public function cate_add(){
    	 $cate = D('navigation');
    	if (IS_POST) {
    	    $data['catename']=I('catename');
          if ($cate->create($data)) {
                if ($cate->add()) {
                 $this->success('添加栏目成功',U('cate_list'));
                } else {
                     $this->error('添加栏目失败');
                }
          } else {
                $this->error($cate->getError());
          }
          
    	    return;   
    	}
        $this->display();
    }
   
   //栏目排序
    public function cate_sort(){

         $cate=D('navigation');
         foreach ($_POST as $id => $sort) {
               $cate->where(array('id'=>$id))->setField('sort',$sort);
         }
         $this->success('排序成功',U('cate_list'));

    }
    //删除
    public function cate_del(){
         $cate=D('navigation');
         if ($cate->delete(I('id'))) {
             $this->success('删除成功',U('cate_list'));
         }else{
             $this->error('删除失败',U('cate_list'));
         }

    }

    //修改
    public function cate_edit(){
         $cate=D('navigation');
         if (IS_POST) {
            $data['catename']=I('catename');
            $data['id']=I('id');
            if ($cate->create($data)) {
                $save=$cate->save();
                 if ($save !== false) {
                      $this->success('修改成功',U('cate_list'));
                 }else{
                      $this->error('修改失败',U('cate_list'));
                 }

            }else{
                 $this->error($cate->getError());
            }

             return;
         }
         $cates=$cate->find(I('id'));
         $this->assign('cates',$cates);

         $this->display();
    
    }

}