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
<!--[if IE 6]>
<script type="text/javascript" src="http://http://127.0.0.1/tp/Application/Admin/Public/lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>资讯列表 - 资讯管理 - H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a> <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
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
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<!-- <li><a href="index.php/admin/Index/cate_list" title="资讯管理">资讯管理</a></li> -->
					<li><a href="<?php echo U('Admin/Cate/cate_list');?>" title="资讯管理">资讯管理</a></li>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
		<span class="c-gray en">&gt;</span>
		资讯管理
		<span class="c-gray en">&gt;</span>
		资讯列表
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
	</nav>
	<div class="Hui-article">
		<article class="cl pd-20">
			
			<div class="cl pd-5 bg-1 bk-gray mt-20">
				<span class="l">
				<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
				<a class="btn btn-primary radius" href=""> 添加资讯</a>
				</span>
				<span class="r">共有数据：<strong>54</strong> 条</span>
			</div>
			<div class="mt-20">
				<table class="table table-border table-bordered table-bg table-hover table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" name="" value=""></th>
							<th width="80">ID</th>
							<th>标题</th>
							<th width="80">分类</th>
							<th width="80">来源</th>
							<th width="120">更新时间</th>
							<th width="75">浏览次数</th>
							<th width="60">发布状态</th>
							<th width="120">操作</th>
						</tr>
					</thead>
					<tbody>
						<tr class="text-c">
							<td><input type="checkbox" value="" name=""></td>
							<td>10001</td>
							<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看">资讯标题</u></td>
							<td>行业动态</td>
							<td>H-ui</td>
							<td>2014-6-11 11:11:42</td>
							<td>21212</td>
							<td class="td-status"><span class="label label-success radius">已发布</span></td>
							<td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_stop(this,'10001')" href="javascript:;" title="下架">操作</td>
						</tr>
					</tbody>
				</table>
			</div>
		</article>
	</div>
</section>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui.admin/js/H-ui.admin.page.js"></script>

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/laypage/1.2/laypage.js"></script>
</body>
</html>