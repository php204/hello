<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

    /*首页加载所需要的信息*/
    public function index(){
         

         $article=D('article');
         $logo=D('logo');
         /*$articlestb=$article->where(array('cateid'=>5))->order('id desc')->select();*/
          /*点击排行*/
         $articlesph=$logo->where(array('cateid'=>5))->order('sum desc')->limit(5)->select();
         /*最新文章*/
         $articleszx=$logo->where(array('cateid'=>6))->order('time desc')->limit(5)->select();
         /*特别推荐*/
         $articlesdj=$article->where(array('cateid'=>7))->order('id desc')->limit(6)->select();
         /*$this->assign('articlestb',$articlestb);*/
         $this->assign('articlesph',$articlesph);


         $this->assign('articleszx',$articleszx);
         $this->assign('articlesdj',$articlesdj);
         $this->display();

    } 
    

    
}