<?php if (!defined('THINK_PATH')) exit();?>﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="http://127.0.0.1/tp/Application/Admin/View/Index/favicon.ico" />
<link rel="Shortcut Icon" href="http://127.0.0.1/tp/Application/Admin/View/Index/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/html5.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui.admin/css/H-ui.admin.css" />
<!-- <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp/Application/Admin/Public/lib/Hui-iconfont/1.0.8/iconfont.css" /> -->
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp/Application/Admin/Public/bootstrap-3.3.7-dist/css/bootstrap.min.css">

<!--[if IE 6]>
<script type="text/javascript" src="http://http://127.0.0.1/tp/Application/Admin/Public/lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>叶贵峰 后台系统</title>
<meta name="keywords" content="博客后台管理">
<meta name="description" content="博客后台管理">
</head>
<body>
<!--_header 作为公共模版分离出去-->
 <header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="http://127.0.0.1/tp/Home/Index/index">个人博客后台</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">Y-Gui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span><a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;"></a>
		
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo (session('username')); ?><i class="Hui-iconfont">设置</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="/tp/index.php/Admin/Admin/logout">切换账户</a></li>
							<li><a href="/tp/index.php/Admin/Admin/edit/id/<?php echo (session('id')); ?>">修改密码</a></li>
							<li><a href="/tp/index.php/Admin/Admin/logout">退出</a></li>
						</ul>
					</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<!--/_header 作为公共模版分离出去-->

<!--_menu 作为公共模版分离出去-->
 <aside class="Hui-aside">
	
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 文章管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					 <li><a href="/tp/index.php/Admin/Article/article_list" title="特别推荐">文章管理</a></li>
					 <li><a href="/tp/index.php/Admin/logo/logo_list" title="特别推荐">导航管理</a></li>
		        </ul>
	       </dd>
        </dl>
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 分类管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>

					 <li><a href="/tp/index.php/Admin/Navigation/cate_list" title="导航管理">导航管理</a></li>
					 <li><a href="/tp/index.php/Admin/Cate/cate_list" title="资讯管理">栏目管理</a></li>

		       </ul>
	       </dd>
        </dl>
        <dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 友情链接<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					 <li><a href="/tp/index.php/Admin/Link/link_list" title="链接管理">链接管理</a></li>
		        </ul>
	       </dd>
        </dl>
         <dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i>管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					 <li><a href="/tp/index.php/Admin/Admin/admin_list" title="链接管理">管理员添加</a></li>
		        </ul>
	       </dd>
        </dl>
        <dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i>评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					 <li><a href="/tp/index.php/Admin/Admin/like_list" title="链接管理">已有评论</a></li>
		        </ul>
	       </dd>
        </dl>
		<!-- <dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/picture-list.html" title="图片管理">图片管理</a></li>
		</ul>
			</dd>
		</dl>
		<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="product-brand.html" title="品牌管理">品牌管理</a></li>
					<li><a href="product-category.html" title="分类管理">分类管理</a></li>
					<li><a href="product-list.html" title="产品管理">产品管理</a></li>
		</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="" title="评论列表">评论列表</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/feedback-list.html" title="意见反馈">意见反馈</a></li>
		</ul>
			</dd>
		</dl>
		<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/member-list.html" title="会员列表">会员列表</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/member-del.html" title="删除的会员">删除的会员</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/member-level.html" title="等级管理">等级管理</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/member-scoreoperation.html" title="积分管理">积分管理</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/member-record-browse.html" title="浏览记录">浏览记录</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/member-record-download.html" title="下载记录">下载记录</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/member-record-share.html" title="分享记录">分享记录</a></li>
		</ul>
			</dd>
		</dl>
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/admin-role.html" title="角色管理">角色管理</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/admin-permission.html" title="权限管理">权限管理</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/admin-list.html" title="管理员列表">管理员列表</a></li>
		</ul>
			</dd>
		</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/charts-1.html" title="折线图">折线图</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/charts-2.html" title="时间轴折线图">时间轴折线图</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/charts-3.html" title="区域图">区域图</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/charts-4.html" title="柱状图">柱状图</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/charts-5.html" title="饼状图">饼状图</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/charts-6.html" title="3D柱状图">3D柱状图</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/charts-7.html" title="3D饼状图">3D饼状图</a></li>
		</ul>
			</dd>
		</dl>
		<dl id="menu-system">
			<dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/system-base.html" title="系统设置">系统设置</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/system-category.html" title="栏目管理">栏目管理</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/system-data.html" title="数据字典">数据字典</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/system-shielding.html" title="屏蔽词">屏蔽词</a></li>
					<li><a href="http://127.0.0.1/tp/Application/Admin/View/Index/system-log.html" title="系统日志">系统日志</a></li>
		</ul>
			</dd>
		</dl> -->
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont"></i> <a href="/" class="maincolor">首页</a> 
		<span class="c-999 en">&gt;</span>
		<span class="c-666">我的桌面</span> 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			<p class="f-20 text-success">欢迎使用
				<span class="f-14"></span>
				博客后台系统</p>
			<p>登录次数：18 </p>
			<p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
			<table class="table table-border table-bordered table-bg">
				<thead>
					<tr>
						<th colspan="7" scope="col">信息统计</th>
			</tr>
					<tr class="text-c">
						<th>统计</th>
						<th>资讯库</th>
						<th>图片库</th>
						<th>产品库</th>
						<th>用户</th>
						<th>管理员</th>
			</tr>
		</thead>
				<tbody>
					<tr class="text-c">
						<td>总数</td>
						<td>92</td>
						<td>9</td>
						<td>0</td>
						<td>8</td>
						<td>20</td>
			</tr>
			
		</tbody>
	</table>
			<table class="table table-border table-bordered table-bg mt-20">
				<thead>
					<tr>
						<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
				<tbody>
					<tr>
						<th width="30%">服务器计算机名</th>
						<td><span id="lbServerName">http://127.0.0.1/</span></td>
			</tr>
					<tr>
						<td>服务器IP地址</td>
						<td><?php echo get_client_ip(); ?></td>
			</tr>
					<tr>
						<td>服务器域名</td>
						<td>www.h-ui.net</td>
			</tr>
					
		</tbody>
	</table>
</article>
		<footer class="footer">
			<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br> Copyright &copy;2015 H-ui.admin v3.0 All Rights Reserved.<br> 本后台系统由<a href="" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
</footer>
</div>
</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui.admin/js/H-ui.admin.page.js"></script>

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">

</script>
<!--/请在上方写此页面业务相关的脚本-->

<!--此乃百度统计代码，请自行删除-->

<!--/此乃百度统计代码，请自行删除-->
</body>
</html>