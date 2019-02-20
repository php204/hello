<?php
namespace admin\Controller;
use Think\Controller;
class LogoController extends Controller {
  public function __construct(){
      parent::__construct();
      if (!session('id')) {
           $this->error('请先登录系统',U('Login/index'));
      }
  }
 //栏目的列表页面
    public function logo_list(){
        $article = D('LogoView');
        $count = $article->count();
        $Page  = new \Think\Page($count,5);
        $show  = $Page->show();
        $articles = $article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('articles',$articles);// 赋值数据集
        $this->display();
    }
 //栏目添加页面转跳及验证
    public function article_add(){
    	 $article = D('logo');
    	if (IS_POST) {
            $data['title']=I('title');
            $data['content']=I('content');
            $data['desc']=I('desc');
    	      $data['cateid']=I('cateid');
            $data['time']=time();
            if ($_FILES['pic']['tmp_name'] != '') {
                   $upload = new \Think\Upload();// 实例化上传类
                   $upload->maxSize = 3145728;
                   $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');
                   $upload->savePath = './Public/Uploads/';
                   $upload->rootPath = './';
                   $info = $upload->uploadOne($_FILES['pic']);
                if(!$info) {      
                     $this->error($upload->getError());    
                    }else{
                     $data['pic']=$info['savepath'].$info['savename']; 
                }
          }

          if ($article->create($data)) {
                if ($article->add()) {
                     $this->success('添加文章成功',U('logo_list'));
                } else {
                     $this->error('添加文章失败');
                }
          } else {
                $this->error($article->getError());
          }
    	    return;   
    	}
        $cateres=D('navigation')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }
   
  
    
    //删除
    public function article_del(){
         $cate=D('logo');
         if ($cate->delete(I('id'))) {
             $this->success('删除成功',U('logo_list'));
         }else{
             $this->error('删除失败',U('logo_list'));
         } 

    }

    //修改
    public function article_edit(){
         $article=D('logo');
        if (IS_POST) {
            $data['id']=I('id');
            $data['title']=I('title');
            $data['content']=I('content');
            $data['desc']=I('desc');
            $data['cateid']=I('cateid');
            $data['time']=time();
            if ($_FILES['pic']['tmp_name'] != '') {
                   $upload = new \Think\Upload();// 实例化上传类
                   $upload->maxSize = 3145728;
                   $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');
                   $upload->savePath = './Public/Uploads/';
                   $upload->rootPath = './';
                   $info = $upload->uploadOne($_FILES['pic']);
                if(!$info){      
                     $this->error($upload->getError());    
                    }else{
                     $data['pic']=$info['savepath'].$info['savename']; 
                }
          }

            if ($article->create($data)) {
                  $save=$article->save();
                  if ($save !== false) {
                       $this->success('修改文章成功',U('logo_list'));
                  } else {
                       $this->error('修改文章失败');
                  }
            } else {
                  $this->error($article->getError());
            }
              return;   
          }
         $articles=$article->find(I('id'));
         $cate=D('navigation');
         $cates =$cate->select();
         $this->assign('articles',$articles);
         $this->assign('cates',$cates);
         $this->display();
    
    }


    //批量删除
    public function logo_del_all(){
                   /*使用M进行实例化*/
                   $art=M('logo');
            
                  //接受删除的ID
                   $ids=I('get.ids');
                   //使用substr截取 使用strlen获取截取的长度，目的是去掉最后一个逗号
                   $ids=substr($ids, 0,strlen($ids)-1);
                     
                    //转成数组
                   $ini['id']=array('in',$ids);
                
                   //执行删除
                   $n=$art->where($ini)->delete();

                   if($n){
                        $this->success('删除成功',U('logo_list'),3);
                    }else{
                        $this->error('删除失败',U('logo_list'),3);
                    }

                    
          }

}