<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->cate();
        $this->link();
        $this->nav();
    }

    public function cate(){
    	 $cate=D('cate');
    	 $cateres=$cate->order('sort desc')->select();
    	 $this->assign('cateres',$cateres);
    }
    
    public function link(){
    	 $link=D('link');
    	 $linkes=$link->order('sort desc')->select();
    	 $this->assign('linkes',$linkes);

    }

   

    public function nav(){
         $navigation=D('navigation');
         $navigations=$navigation->order('sort desc')->select();
         $this->assign('navigations',$navigations);
    }

   /* 详情页点击排行*/
    public function dianji(){

            $article=D('article');
            $dianji=$article->where(array('cateid'=>6))->order('sum desc')->limit(4)->select();
            $this->assign('dianji',$dianji);
    }
}