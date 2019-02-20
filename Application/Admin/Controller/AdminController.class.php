<?php
namespace admin\Controller;
use Think\Controller;
class AdminController extends Controller {
  public function __construct(){
      parent::__construct();
      if (!session('id')) {
           $this->error('请先登录系统',U('Login/index'));
      }
  }
 //栏目的列表页面
    public function admin_list(){
        $admin = D('admin');
        $count = $admin->count();
        $Page  = new \Think\Page($count,2);
        $show  = $Page->show();
        $list = $admin->order('sort asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
 //栏目添加页面转跳及验证
    public function admin_add(){
    	 $admin = D('admin');
       if (IS_POST) {
          $data['username'] =I('username');
          $data['password'] =md5(I('password'));
          $data['wpassword'] =md5(I('password1'));

          if ($admin->create($data)) {
              if ($data['password']!==$data['wpassword']) {
                  $this->error('密码不一致');
              }
              if ($admin->add()) {
                $this->success('添加成功',U('admin_list'));
              }else{
                $this->error('添加失败');
              }
          }else{
                $this->error($admin->getError());
          }
          return;
       }
       $this->display();
    }
   
   //栏目排序
    public function admin_sort(){

         $admin=D('admin');
         foreach ($_POST as $id => $sort) {
               $admin->where(array('id'=>$id))->setField('sort',$sort);
         }
         $this->success('排序成功',U('admin_list'));
            
    }
    //删除
    public function admin_del(){
         $admin=D('admin');
         $id=I('id');
         if ($id==1) {
                  $this->error('初始化管理员不能删除',U('admin_list'));       
         }else{
              if ($admin->delete(I('id'))) {
                  $this->success('删除成功',U('admin_list'));
              }else{
                  $this->error('删除失败',U('admin_list'));
              }
         } 
    }

    //修改
    public function admin_edit(){
         $admin=D('admin');
        if (IS_POST) {
            $data['username']=I('username');
            $data['id']=I('id');
            $admin_s=$admin->find(I('id'));
            $password = $admin_s['password'];
                if (I('password')) {
                    $data['password']=md5(I('password'));
                }else{
                    $data['password']=$password;
                } 
          
          if ($admin->create($data)) {
                $save=$admin->save();
                if ($save !== false) {
                     $this->success('修改成功',U('admin_list'));
                } else {
                     $this->error('修改失败');
                }
          } else {
                $this->error($admin->getError());
          }
            return;   
        }
         $admins=$admin->find(I('id'));
         $this->assign('admins',$admins);
         $this->display();
    
    }

      
      public function logout(){
         session(null);
         $this->success('退出成功，转跳中',U('Login/index'));
      }

      public function ce(){

        dump( __ACTION__);
      }

}