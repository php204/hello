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
<article>
  <div class="leftbox">
    <div class="newblogs">
      <h2 class="hometitle">
        <span>

           <?php if(is_array($catename)): foreach($catename as $key=>$vo): ?><a href="/tp/index.php/Home/cate/lists/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a><?php endforeach; endif; ?>

         </span>
      </h2>
      <ul>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
              <h3 class="blogtitle"><a href="/tp/index.php/Home/article/info/id/<?php echo ($vo["id"]); ?>" target="_blank" ><?php echo ($vo["title"]); ?></a></h3>
              <div class="bloginfo"><span class="blogpic"><a href="/tp/index.php/Home/Article/infos/id/<?php echo ($vo["id"]); ?>" title=""><img src="/tp/<?php echo ($vo["pic"]); ?>"  /></a></span>
                <p><?php echo ($vo["desc"]); ?></p>
              </div>
              <div class="autor"><span class="lm f_l"><a href="/">叶贵丰个人博客</a></span><span class="dtime f_l"><?php echo (date("Y-m-d",$vo["time"])); ?></span><span class="viewnum f_l">浏览<a href="/"><?php echo ($vo["sum"]); ?></a>次</span><span class="pingl f_l">评论（<a href="/">30</a>）</span><span class="f_r"><a href="/tp/index.php/Home/article/infos/id/<?php echo ($vo["id"]); ?>" class="more">阅读原文>></a></span></div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <div class="pagelist"><?php echo ($page); ?></div>
    </div>
  </div>
      <div class="rightbox">
    <div class="aboutme">
      <h2 class="ab_title">关于我</h2>
      <div class="avatar"><img src="http://127.0.0.1/tp/Application/Home/Public/images/b04.jpg"></div>
      <div class="ab_con">
        <p>网名：无法输入</p>
        <p>职业：php </p>
        <p>籍贯：黑龙江</p>
        <p>邮箱：823025114@qq.com</p>
      </div>
    </div>
    <div class="blank"></div>
    <div class="search">
      <form action="/tp/index.php/Home/Cate/list" method="get" >
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
        <input class="input_submit" value="搜索" type="submit">
      </form>
    </div>
    <div class="paihang">
      <h2 class="ab_title"><a href="/">点击排行</a></h2>
      <ul>
        <!-- 遍历点击排行的数据 -->
         <?php if(is_array($articlesph)): $i = 0; $__LIST__ = $articlesph;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><b><a href="/tp/index.php/Home/Article/infos/id/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["title"]); ?></a></b>
                <p><i><img src="/tp<?php echo ($vo["pic"]); ?>"></i><?php echo ($vo["desc"]); ?>...</p>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
         <!-- end -->
      </ul>
    </div>
    <div class="links">
      <h2 class="ab_title">友情链接</h2>
      <ul>

          <?php if(is_array($linkes)): $i = 0; $__LIST__ = $linkes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

      </ul>
    </div>
    <div class="weixin">
      <h2 class="ab_title">微信关注</h2>
      <ul>
        <img src="http://127.0.0.1/tp/Application/Home/Public/images/wx.jpg">
      </ul>
    </div>
  </div>
</article>
      <footer>
  <p>Design by <a href="/">叶贵丰个人博客</a> <a href="/"></a></p>
</footer>
</body>
</html>