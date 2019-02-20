<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
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

<title>新增栏目 -密码管理</title>
<meta name="keywords" content="叶贵丰博客">
<meta name="description" content=叶贵丰博客">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
		<input type="hidden" name="id" id="id" value="<?php echo ($admins["id"]); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>管理员：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($admins["username"]); ?>" placeholder="" id="username" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" value="" placeholder="" id="password" name="password">
			</div>
		</div>

		
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并修改</button>
				<button onClick="javascript:location.replace(location.href);" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 重新添加</button>
				<button onClick="history.go(-1)" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i>返回 </button>

			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
 <script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/static/h-ui.admin/js/H-ui.admin.page.js"></script>

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/jquery.validation/1.14.0/messages_zh.js"></script>   
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/ueditor/1.4.3/ueditor.config.js"></script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/ueditor/1.4.3/ueditor.all.min.js"> </script> 
<script type="text/javascript" src="http://127.0.0.1/tp/Application/Admin/Public/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
       UE.getEditor('content',{initialFrameWidth:1500,initialFrameHeight:400,});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>