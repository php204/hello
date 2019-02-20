<?php
namespace admin\Controller;
use Think\Controller;
class LoginController extends Controller {
   public function index(){
       $admin=D('admin');
       if (IS_POST) {
          if ($admin->create($_POST,4)) {
               if ($admin->login()) {
                    $this->success('登录成功，转跳中',U('Index/index'));
                   }else{
                    $this->error('密码或用户名错误'); 
                   }    
            }else{
                $this->error($admin->getError());
            }        
            return;
       }
       if (session('id')) {
           $this->session('已经登录',U('Index/index'));
       }else{
           $this->display('login');
       }
   }
   public function verify(){
        $Verify =  new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
   } 
  

}