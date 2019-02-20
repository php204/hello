<?php
namespace admin\Controller;
use Think\Controller;
class LikeController extends Controller {
  public function __construct(){
      parent::__construct();
      if (!session('id')) {
           $this->error('请先登录系统',U('Login/index'));
      }
  }
 //栏目的列表页面
    public function like_list(){
        $likes = D('likes');
        $likess=$likes->select();

         foreach ($likess as $key => $value) {
                 
                 $aa[]=$value['article_id'];
      
         }
          $bb=array_unique($aa);
          for ($i=0; $i < count($bb); $i++) {         
                  $cc.=$bb["$i"].',';
                  //使用 rtrim() 函数从字符串右端删除字符：
                  $dd = rtrim($cc, ',');

          }
            $ff = array('id' => array('in', $dd));
            $articles= D('ArticleView');
            $pls=$articles->where($ff)->select();
             
            $this->assign('pls',$pls);
            $this->display();

                   
    }
   
    public function like_lists($id){
       
            $like=D('likes');
            $likes=$like->where(array('article_id'=>$id))->select();
            $this->assign('likes',$likes);
            $this->display();
  
     }
  
    public function lx($s){
      
          $cates=D('cate');
          $catename=$cates->where(array('id' => $s))->select();
          
          $this->assign('catename',$catename);
    }

    public function like_huifu(){
       
       if (IS_POST) {
             $likes=D('likes');
             $data['huifu']=$_POST['content'];
             $data['id']=$_GET['id'];

             if ($likes->create($data)) {
                  $save=$likes->save();
                  if ($save !== false) {
                       $this->success('回复成功',U("like_list"));
                  } else {
                       $this->error('回复失败');
                  }
            } else {
                  $this->error($article->getError());
            }
              return;   

       }
       $this->display();
     }

}