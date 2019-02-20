<?php
namespace admin\Model;
use Think\Model;
class AdminModel extends Model {
    protected $_validate = array(
               array('username','require','用户名不能为空',1,'regex',3),
               array('password','require','密码不能为空',1,'regex',1),
               array('username','','不得重复',1,'regex',2),
    );     

    public function login(){
    	   $password=$this->password;
           $info=$this->where(array('username' => $this->username))->find();
           if ($info) {
                if ($info['password']==md5($password)) {
                      session('id',$info['id']);
                      session('username',$info['username']);
                      return true;
                }else{
                      return false;
                }
           }else{
           	   return false;
           }
    }

}