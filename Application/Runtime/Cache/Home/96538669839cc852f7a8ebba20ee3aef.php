<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页_叶贵丰个人博客</title>
<meta name="keywords" content="个人博客,叶贵丰个人博客,叶贵丰" />
<meta name="description" content="叶贵丰个人博客" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://127.0.0.1/tp/Application/Home/Public/css/base.css" rel="stylesheet">
<link href="http://127.0.0.1/tp/Application/Home/Public/css/index.css" rel="stylesheet">
<link href="http://127.0.0.1/tp/Application/Home/Public/css/m.css" rel="stylesheet">
<link rel="stylesheet" href="http://127.0.0.1/tp/Application/Home/Public/layui/css/layui.css">
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Home/Public/layui/layui.all.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Home/Public/js/ajax3.0-min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Home/Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Home/Public/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Home/Public/js/jquery.min.js"></script>

</head>
<body>
<header>
  <div id="mnav">
    <div class="logo"><a href="/">叶贵丰个人博客</a></div>
    <h2 id="mnavh"><span class="navicon"></span></h2>
    <ul id="starlist">
        <li><a href="/tp/index.php/Home/Index/index">网站首页</a></li>
        
      <!-- 数据调用 -->
      <?php if(is_array($navigations)): $i = 0; $__LIST__ = $navigations;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/tp/index.php/Home/cate/lists/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
  </div>
  <script>
window.onload = function ()
{
  var oH2 = document.getElementById("mnavh"); 
  var oUl = document.getElementById("starlist");  
  oH2.onclick = function ()
  {
    var style = oUl.style;
    style.display = style.display == "block" ? "none" : "block";
    oH2.className = style.display == "block" ? "open" : ""
  }
}
</script> 
<script type="text/javascript"></script>
</header>
<div class="line46"></div>
<div class="blank"></div>
<article>
  <div class="leftbox">
    <div class="infos">
      <div class="newsview">
        <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;<a href="/"><?php echo ($catename); ?></a></h2>
        <h3 class="news_title"><?php echo ($arts['title']); ?></h3>
        <div class="news_author"><span class="au01"><?php echo ($adminnames); ?></span><span class="au02"><?php echo (date("Y-m-d",$arts['time'])); ?></span><span class="au03">共<b><?php echo ($sum); ?></b>人围观</span></div>
        <div class="tags"><a href="/">青春</a> <a href="/" target="_blank">激情</a> <a href="/" target="_blank">澎湃</a> <a href="/" target="_blank">小蚁</a> <a href="/" target="_blank">感悟</a></div>
        <div class="news_about"><strong>简介</strong><?php echo ($arts['desc']); ?></div>
        <div class="news_infos">
          <p><img src="http://127.0.0.1/tp<?php echo ($arts['pic']); ?>"  height="200" width="400"></p>
          <?php echo htmlspecialchars_decode($arts['content']);?>
        </div>
        <input type="hidden" name="dianpin" id="dianpin"  value="<?php echo ($arts['id']); ?>">
      </div>
      <div class="share">
      <p class="diggit"><a href="JavaScript:makeRequest('/e/public/digg/?classid=3&amp;id=19&amp;dotop=1&amp;doajax=1&amp;ajaxarea=diggnum','EchoReturnedText','GET','');"> 很赞哦！ </a>(<b id="diggnum"><script type="text/javascript" src=""></script>！！！</b>)</p>
      <p class="dasbox"><a href="javascript:void(0)"  class="dashang" title="祝您每天好心情">祝您每天好心情</a></p>
      <div class="hide_box" style="display: none;"></div>
      <div class="shang_box" style="display: none;"> <a class="shang_close" href="javascript:void(0)" onclick="dashangToggle()" title="关闭">关闭</a>
        <div class="shang_tit">
          <p>感谢您的支持，我会继续努力的!</p>
        </div>
      </div>
    </div>
 
    </div>
    <div class="nextinfo">
      <p>上一篇：<?php if($prevs['title'] == null): ?>当前篇章<?php else: ?><a href="/tp/index.php/Home/Article/info/id/<?php echo ($prevs['id']); ?>" > <?php echo ($prevs['title']); ?></a><?php endif; ?></p>
      <p>下一篇：<?php if($nexts['id'] == null): ?>最后一篇<?php else: ?><a href="/tp/index.php/Home/Article/info/id/<?php echo ($nexts['id']); ?>"><?php echo ($nexts['title']); ?></a><?php endif; ?></p>
    </div>
    <div class="otherlink">
      <h2>相关文章</h2>
      <ul>
         <?php if(is_array($suiji)): $i = 0; $__LIST__ = $suiji;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="_MODULE__/Article/info/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>


    <div class="news_pl">
      <h2>文章评论</h2>
              <p name="test" id="test"></p>
       
              <?php if(is_array($pl)): $i = 0; $__LIST__ = $pl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(pl != ''): ?><ul>
                             <p><span><?php echo ($vo['user']); ?></span></p>
                             <p><span style='color:green'>评论:</span>&nbsp <?php echo ($vo['content']); ?></p>  
                             <P class="time"><?php echo ($vo['time']); ?></P>
                     </ul>
                     <ul>
                             <p style="background:#FAF4FF"><span style="color:red" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                             <?php if($vo['huifu'] != ''): ?><font size="2">站长回复:&nbsp</font></span><font size="2"> <?php echo ($vo['huifu']); ?></font>
                             </else><?php endif; ?>
                            </p> 
                     </ul>
                      <br><?php endif; endforeach; endif; else: echo "" ;endif; ?> 
             
   
    </div>
     <!-- _______________________________________________________________________ -->
       <div class="search" style="height:10px" >
          <input name="pinglun" id="pinglun" class="input_text" value="回复" style="color: rgb(153, 153, 153);" onfocus="if(value=='回复'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='回复'}" type="text">
          <input class="input_submit" value="评论"  name="huifu" id="huifu" type="submit">
      </div>
     <!-- --------------------------------------------------------------------- -->
  </div>
  <div class="rightbox">
    <div class="search">
      <form action="/tp/index.php/Home/Cate/list" method="get" >
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
      
        <input  class="input_submit" value="搜索" type="submit">
      </form>
    </div>
    <div class="paihang">
      <h2 class="ab_title"><a href="/">本栏推荐</a></h2>
      <ul>
        <?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><b><a href="_MODULE__/Article/info/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></b>
              <p><?php echo ($vo["desc"]); ?>...</p>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    
    </div>
    <div class="paihang">
      <h2 class="ab_title"><a href="/">点击排行</a></h2>
      <ul>
        <!-- 点击排行遍历 -->
        <?php if(is_array($dianji)): $i = 0; $__LIST__ = $dianji;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><b><a href="_MODULE__/Article/info/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></b>
                <p><?php echo ($vo["desc"]); ?>...</p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
         <!-- end -->
      </ul>
    </div>
    
  </div>
</article>
<footer>
  <p>Design by <a href="/">叶贵丰个人博客</a> <a href="/"></a></p>
</footer>
 <script type="text/javascript">
                 //使用原生js回去id 
                  var move = document.getElementById('huifu');
                  var pinglun = document.getElementById('pinglun');
                  var dianpin = document.getElementById('dianpin');
                  //绑定onclick
                    move.onclick = function(){
                            
                            var content=pinglun.value;
                            if (content == '回复') {
                              
                              layer.msg('请输入内容');    
                              return false;

                            }
                             
                            var id=dianpin.value;
                          
                            $.post("<?php echo U('Article/pinglun');?>",{"id":id,"content":content},function(d){
                                  
                                  if (d == "") {
                                      layer.msg('评论失败'); 
                                      return false;
                                  }
                                  if(d==1){
                                      layer.msg('已经评论过了'); 
                                      return false;
                                  }

                                  layer.msg('评论成功');
                                  
                                         
                                  for (var index in d){
                                    for(var key in d[index]){
                                           var content=d[index]['content'];
                                           var time=d[index]['time'];
                                           var user=d[index]['user'];
                                         
                                            m="<ul><p><span>"+user+"</span></p><p>&nbsp&nbsp&nbsp&nbsp<font size='2'><span style='color:green'>评论:</span>&nbsp</font>"+content+"</p><p>"+time+"</p></ul><ul style='background:#FAF4FF'><span style='color:red' >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font size='2'>站长回复:&nbsp</font></span><font size='2'>你好！这是我第一个留言的。</font></ul><br>";
                                    
                                    }  
                                       //append 追加所有 html追加一个
                                        $("#test").html(m); //在html页面id=test的标签里显示html内容
                            }

                      },"JSON");





                          
                    };

    

      

 </script>
</body>
</html>