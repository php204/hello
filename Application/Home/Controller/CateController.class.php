<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends Controller {


        public function Cate(){

            $this->display();

        }
        /*搜索分类遍历及所有分类*/
        public function list(){
                        
                            $article = D('article'); // 实例化User对象
                            $logo=D('logo');
                        if (I('id')!=="") {
                            $id=I('id');
                            $count = $article->where(array('cateid' =>$id))->count();
                            $Page  = new \Think\Page($count,2);
                            $show  = $Page->show();
                            $list = $article->where(array('cateid' =>$id))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();

                            $articlesph=$logo->where(array('cateid'=>5))->order('sum desc')->limit(5)->select();
                            $this->catename();
                            $this->assign('articlesph',$articlesph);
                            $this->assign('list',$list);
                            $this->assign('page',$show);// 赋值分页输出
                            $this->display();   
                        }else{
                            $articlesph=$logo->where(array('cateid'=>5))->order('sum desc')->limit(5)->select();
                            $keyboard = trim(I('get.keyboard'));
                            $count = $article->where("title like '%$keyboard%'")->count();
                            $Page  = new \Think\Page($count,2);
                            $show  = $Page->show();
                            $list = $article->where("title like '%$keyboard%'")->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
                            $this->catename();
                            $this->assign('articlesph',$articlesph);
                            $this->assign('list',$list);
                            $this->assign('page',$show);// 赋值分页输出
                            $this->display();   
                            
                        }

        }

         /*搜索分类遍历及所有分类*/
        public function lists(){
                        
                            $article = D('logo'); // 实例化User对象
                            $logo=D('logo');
                        if (I('id')!=="") {     
                            $id=I('id');
                            $count = $article->where(array('cateid' =>$id))->count();
                            $Page  = new \Think\Page($count,5);
                            $show  = $Page->show();
                            $list = $article->where(array('cateid' =>$id))->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
                            $articlesph=$logo->where(array('cateid'=>5))->order('sum desc')->limit(5)->select();
                            $this->catename();
                            $this->assign('articlesph',$articlesph);
                            $this->assign('list',$list);
                            $this->assign('page',$show);// 赋值分页输出
                            $this->display();   
                        }else{
                            $articlesph=$logo->where(array('cateid'=>5))->order('sum desc')->limit(5)->select();
                            $keyboard = trim(I('get.keyboard'));
                            $count = $article->where("title like '%$keyboard%'")->count();
                            $Page  = new \Think\Page($count,2);
                            $show  = $Page->show();
                            $list = $article->where("title like '%$keyboard%'")->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
                            $this->catename();
                            $this->assign('articlesph',$articlesph);
                            $this->assign('list',$list);
                            $this->assign('page',$show);// 赋值分页输出
                            $this->display();   
                            
                        }

        }

        public function catename(){

                $navigation=D('navigation');
                $catename=$navigation->select();
                $this->assign('catename',$catename);
            

        }

    
}