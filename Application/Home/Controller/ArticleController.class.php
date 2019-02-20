<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
 
    public function Article(){
        $this->display();
    }

     /*遍历同中文章类型*/
    public function info(){
        /*获取当文章发布者*/
        $adminID=I('session.id');
        $admins =D('admin');
        $adminname=$admins->where(array('id'=>$adminID))->find();
        $adminnames=$adminname['username'];

        
        $arts = D('article')->find(I('id'));
        $sum=$arts['sum'];
        //获取浏览次数
        $artss=D('article');//实例化
        $data['id'] = I('id');//获取ID
        $data['sum'] = $arts['sum']+1;//获取对应ID里面的sum加一
        //使用save实现保存
        $save=$artss->save($data);
        //end-----------------
        
        /*本栏目推荐*/
        $cateid=$arts['cateid'];
        $cates=$artss->where(array('cateid'=>$cateid))->order('sum desc')->limit(4)->select();
        
         /*end*/
        /*获取评论*/

        $pinglun = D('likes');
        $pl=$pinglun->where(array('article_id'=>I('id')))->order('time desc')->select();
            
         
     

         /*end*/

         /*加载上下篇*/
        $this->other(I('id'));
        $this->dianji();
        $this->sjs();
         //调用catename方法传入参数调出catename
        $this->catename($arts['cateid']);
        $this->assign('sum',$sum);
        $this->assign('cates',$cates);
        $this->assign('pl',$pl);
        $this->assign('adminnames',$adminnames);
        $this->assign('arts',$arts);
        $this->display();
    }

     public function infos(){
        /*获取当文章发布者*/
        $adminID=I('session.id');
        $admins =D('admin');
        $adminname=$admins->where(array('id'=>$adminID))->find();
        $adminnames=$adminname['username'];

        
        $arts = D('logo')->find(I('id'));
        $sum=$arts['sum'];
        //获取浏览次数
        $artss=D('logo');//实例化
        $data['id'] = I('id');//获取ID
        $data['sum'] = $arts['sum']+1;//获取对应ID里面的sum加一
        //使用save实现保存
        $save=$artss->save($data);
        //end-----------------
        
        /*本栏目推荐*/
        $cateid=$arts['cateid'];
        $cates=$artss->where(array('cateid'=>$cateid))->order('sum desc')->limit(4)->select();
        
         /*end*/
        /*获取评论*/

        $pinglun = D('likes');
        $pl=$pinglun->where(array('article_id'=>I('id')))->order('time desc')->select();
            
         
     

         /*end*/

         /*加载上下篇*/
        $this->other(I('id'));
        $this->dianji();
        $this->sjs();
         //调用catename方法传入参数调出catename
        $this->catename($arts['cateid']);
        $this->assign('sum',$sum);
        $this->assign('cates',$cates);
        $this->assign('pl',$pl);
        $this->assign('adminnames',$adminnames);
        $this->assign('arts',$arts);
        $this->display();
    }
     //随机数
    public function sjs(){
        
          /*获取随机六位*/
            $arts1=D('article');
            $length=$arts1->count();
            $aaa=$arts1->select();
            for ($i=0; $i < $length; $i++) { 

                 $bbb[]=rand(1,$length);  

                 }     
                    
               $ccc=array_unique($bbb);
            if (count($ccc) < 6 || count($ccc) > 6) {
                  
                 $this->sjs();

                }else{

                    foreach ($ccc as $key => $value) {
                         
                       $id=$value;
                       $sj=$aaa["$id"];
                            if ($sj == ""){
                                 $this->sjs();
                             }else{
                                $suiji[]=$sj;
                             }
                     }
                $this->assign('suiji',$suiji);
        }
                

    }

    /*获取文章所在类型的姓名*/
    public function catename($cateid){

        $cates=D('cate')->find($cateid);
        $this->assign('catename',$cates['catename']);

    }

    /*设置上下篇*/
    public function other($id){

    	   $prevs = D('article')->where('id<'.$id)->order('id desc')->find();
    	   $nexts = D('article')->where('id>'.$id)->order('id desc')->find();
    	   $this->assign('prevs',$prevs);
    	   $this->assign('nexts',$nexts);

    }

    public function pinglun(){
         
           $likes=D('likes');
         //s  $aaa=$likes->where(array('ip' =>$_SERVER['REMOTE_ADDR']))->select();
           $data['user']='游客'.rand(1000,5000);
           $data['article_id']=I("post.id");
           $data['content']=I("post.content");
           $data['time']=date("Y-m-d,H:i:s",time());
           $data['ip']=$_SERVER['REMOTE_ADDR'];
              
  /*         if ($aaa) {
              echo "1";
           }else{

            if ($likes->create($data)) {
              $save = $likes->add();
               if ($save !== false) {
                  $d=$likes->select();
                  echo json_encode($d);
               }
                

           }
        }*/

         if ($likes->create($data)) {
              $save = $likes->add();
               if ($save !== false) {
                  $d=$likes->select();
                  echo json_encode($d);
               }
                

           }

            
    }
}