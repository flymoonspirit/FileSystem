<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head lang="zh-CN">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>首页</title>
		<link href="http://127.0.0.1/fileSystem/Public/utils/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="http://127.0.0.1/fileSystem/Public/css/Home/non-responsive.min.css" rel="stylesheet" type="text/css" />
		<link href="http://127.0.0.1/fileSystem/Public/css/Home/index.css" rel="stylesheet" type="text/css" />
		<!--[if lt IE 9]>
		<script src="http://127.0.0.1/fileSystem/Public/js/html5shiv.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			$baseUrl = 'http://127.0.0.1/fileSystem';
		</script>
	</head>

	<body>
		<!-- nav start -->
		<nav class="navbar navbar-inverse">
	<div class="container">
		<!-- 系统商标 -->
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				<img alt="Brand" src="http://127.0.0.1/fileSystem/Public/images/Home/brand.png"/>
			</a>
		</div>

		<!-- nav的内容-->
		<ul class="nav navbar-nav">
			<li class="active"><a href="#">主页</a></li>
			<li><a href="#">文件</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="搜索你的文件">
					</div>
					<button type="submit" class="btn btn-default">搜&nbsp;索</button>
				</form>
			</li>
			<li class="dropdown navbar_myinfo">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">用户名 <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">我的信息</a></li>
					<li><a href="#">我的文件</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">设&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;置</a></li>
					<li><a href="#">退&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;出</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!-- /.container -->
</nav>
		<!-- nav end -->

		<!-- left start -->
		<div class="container left">
			<div class="panel-group left_content" id="accordion" role="tablist" aria-multiselectable="true">
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion"
						href="#collapseOne" aria-expanded="true"
						aria-controls="collapseOne"><span
						class="glyphicon glyphicon-list"></span>&nbsp;选项一&nbsp;<span
						class="caret"></span></a>
				</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			<div class="panel-body">
				<div class="list-group">
					<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置一<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
					<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置二<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
					<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置三<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
					<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置四<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingTwo">
				<h4 class="panel-title">
					<a class="collapsed" data-toggle="collapse"
						data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
						aria-controls="collapseTwo"><span
						class="glyphicon glyphicon-list"></span>&nbsp;选项二&nbsp;<span
						class="caret"></span></a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
				aria-labelledby="headingTwo">
				<div class="panel-body">
					<div class="list-group">
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置一<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置二<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置三<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置四<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
					</div>
				</div>
			</div>
		</div>
	<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="headingThree">
				<h4 class="panel-title">
					<a class="collapsed" data-toggle="collapse"
						data-parent="#accordion" href="#collapseThree"
						aria-expanded="false" aria-controls="collapseThree"><span
						class="glyphicon glyphicon-list"></span>&nbsp;选项三&nbsp;<span
						class="caret"></span></a>
				</h4>
			</div>
			<div id="collapseThree" class="panel-collapse collapse"
				role="tabpanel" aria-labelledby="headingThree">
				<div class="panel-body">
					<div class="list-group">
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置一<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置二<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置三<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
						<a href="#" class="list-group-item"><span
							class="glyphicon glyphicon-cog"></span>&nbsp;设置四<span
							class="glyphicon glyphicon-arrow-right pull-right arrow_right"></span></a>
					</div>
				</div>
			</div>
		</div>
</div>
		</div>
		<!-- left end -->

		<!-- right start -->
		<div class="right">
			<div class="container">
	<div class="right_top">
		<ul>
			<li>
				<button id="uploadFile" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-open" aria-hidden="true"></span>&nbsp;上传文件</button>
			</li>
			<li>
				<button id="mkDir" type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;新建文件夹</button>
			</li>
		</ul>
	</div>

	<div class="right_menu">
		<ol id="breadcrumb" class="breadcrumb pull-left">
			<li><a class="breadcrumb_item" href="javascript:void(0)" data-root="root" data-path="<?php echo ($rootPath); ?>">我的文件</a></li>
			<?php if(count($rsName) > 0): if(is_array($rsName)): foreach($rsName as $k=>$rN): ?><li><a class="breadcrumb_item" href="javascript:void(0)" data-path="<?php echo ($rsPath[$k]); ?>"><?php echo ($rN); ?></a></li><?php endforeach; endif; endif; ?>
		</ol>
		<ul class="pull-right right_menuinfo">
			<?php if(count($rsName) > 0): ?><li><a id="return_pre" href="javascript:void(0)">返回上一级</a></li>
			<?php else: ?>
			<li><a id="return_pre" href="javascript:void(0)">没有上一级</a></li><?php endif; ?>
			<li id="fileCount">已全部加载，共<?php echo (count($fileList)); ?>个</li>
		</ul>
	</div>

	<div class="panel panel-default right_function">
		<div class="panel-body">
			<div class="checkbox pull-left">
				<label>
					<input id="all_check" type="checkbox" />全选
				</label>
			</div>
			<div class="pull-right right_function_btn">
				<ul>
					<li>
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-save" aria-hidden="true"></span>&nbsp;下载</button>
					</li>
					<li>
						<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;删除</button>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="right_content" id="right_content">
		<ul class="content_list">
			<?php if(is_array($fileList)): foreach($fileList as $key=>$fL): if($fL->type == 'folder'): ?><li class="content_item">
						<div>
							<img alt="文件夹" title="<?php echo ($fL->fileName); ?>" src="http://127.0.0.1/fileSystem/Public/images/Home/floder.png" />
							<a href="#"><?php echo ($fL->fileName); ?></a>
							<input class="is_selected" type="hidden" value="0" />
							<input name="type"  type="hidden" value="<?php echo ($fL->type); ?>" />
						    <input name="currentPath" type="hidden" value="<?php echo ($fL->currentPath); ?>" />
						    <span class="sp_btn"><a class="item_del" href="javascript:void(0)">删除&nbsp;</a><a class="item_rename" href="javascript:void(0)">重命名</a></span>
						</div>
					</li><?php endif; endforeach; endif; ?>

			<?php if(is_array($fileList)): foreach($fileList as $key=>$fL): if($fL->type == 'file'): ?><li class="content_item">
						<div>
							<img alt="文件" title="<?php echo ($fL->fileName); ?>" src="http://127.0.0.1/fileSystem/Public/images/Home/file.png" />
							<a href="#"><?php echo ($fL->fileName); ?></a>
							<input class="is_selected" type="hidden" value="0" />
							<input name="type"  type="hidden" value="<?php echo ($fL->type); ?>" />
						    <input name="currentPath" type="hidden" value="<?php echo ($fL->currentPath); ?>" />
						     <span class="sp_btn"><a class="item_down" href="javascript:void(0)">下载&nbsp;</a><a class="item_del" href="javascript:void(0)">删除&nbsp;</a><a class="item_rename" href="javascript:void(0)">重命名&nbsp;</a></span>
						</div>
						<span class="file_type"><?php echo ($fL->extensionName); ?></span>
					</li><?php endif; endforeach; endif; ?>
		</ul>
	</div>

</div>
		</div>
		<!-- right end -->

		<!--template.js的模板-->
		<script id="content_tpl" type="text/html">
			<ul class="content_list">
				{{each fileList as fL i}} {{if fL.type == 'folder'}}
				<li class="content_item">
					<div>
						<img alt="文件夹" title="{{fL.fileName}}" src="http://127.0.0.1/fileSystem/Public/images/Home/floder.png" />
						<a href="#">{{fL.fileName}}</a>
						<input class="is_selected" type="hidden" value="0" />
						<input name="type" type="hidden" value="{{fL.type}}" />
						<input name="currentPath" type="hidden" value="{{fL.currentPath}}" />
						 <span class="sp_btn"><a class="item_del" href="javascript:void(0)">删除&nbsp;</a><a class="item_rename" href="javascript:void(0)">重命名&nbsp;</a></span>
					</div>
				</li>
				{{/if}} {{/each}} {{each fileList as fL i}} {{if fL.type == 'file'}}
				<li class="content_item">
					<div>
						<img alt="文件" title="{{fL.fileName}}" src="http://127.0.0.1/fileSystem/Public/images/Home/file.png" />
						<a href="#">{{fL.fileName}}</a>
						<input class="is_selected" type="hidden" value="0" />
						<input name="type" type="hidden" value="{{fL.type}}" />
						<input name="currentPath" type="hidden" value="{{fL.currentPath}}" />
						<span class="sp_btn"><a class="item_down" href="javascript:void(0)">下载&nbsp;</a><a class="item_del" href="javascript:void(0)">删除&nbsp;</a><a class="item_rename" href="javascript:void(0)">重命名&nbsp;</a></span>
					</div>
					<span class="file_type">{{fL.extensionName}}</span>
				</li>
				{{/if}} {{/each}}
			</ul>
		</script>

		<script src="http://127.0.0.1/fileSystem/Public/js/jquery-1.11.1.min.js"></script>
		<script src="http://127.0.0.1/fileSystem/Public/utils/bootstrap/js/bootstrap.min.js"></script>
		<script src="http://127.0.0.1/fileSystem/Public/js/Home/template.js"></script>
		<script src="http://127.0.0.1/fileSystem/Public/utils/layer/layer.js"></script>
		<script src="http://127.0.0.1/fileSystem/Public/js/jsUrl.js"></script>
		<script src="http://127.0.0.1/fileSystem/Public/js/Home/index.js"></script>
		
		<script type="text/javascript">
			! function() {
				//加载扩展模块
				layer.config({
					extend: 'http://127.0.0.1/fileSystem/Public/utils/layer/extend/layer.ext.js'
				});
				//上传
				$('#uploadFile').on('click', function() {
					$currentPath = $('#breadcrumb li:last-child').children('a').attr('data-path');
					$currentPath = UrlEncode($currentPath);
					layer.open({
						type: 2,
						title: ['上传文件', 'font-size:18px;'],
						skin: 'layui-layer-rim', //加上边框
						shift: 2,
						area: ['700px', '400px'], //宽高
						content: 'http://127.0.0.1/fileSystem/index.php?m=Home&c=Index&a=fileup&currentPath='+$currentPath,
						end:function(index){
							location.reload();	
						}
					});
				});
			}();
		</script>
	</body>

</html>