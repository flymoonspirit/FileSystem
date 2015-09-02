<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html dir="ltr">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

		<title>文件上传</title>

		<link rel="stylesheet" href="http://127.0.0.1/fileSystem/Public/utils/jqueryUI/themes/base/jquery-ui.css" type="text/css" />
		<link rel="stylesheet" href="http://127.0.0.1/fileSystem/Public/utils/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />

		<script src="http://127.0.0.1/fileSystem/Public/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://127.0.0.1/fileSystem/Public/utils/jqueryUI/jquery-ui.min.js"></script>

		<!-- production -->
		<script type="text/javascript" src="http://127.0.0.1/fileSystem/Public/utils/plupload/plupload.full.min.js"></script>
		<script type="text/javascript" src="http://127.0.0.1/fileSystem/Public/utils/plupload/jquery.ui.plupload/jquery.ui.plupload.js"></script>
		<script type="text/javascript" src="http://127.0.0.1/fileSystem/Public/js/jsUrl.js"></script>
		<script src="http://127.0.0.1/fileSystem/Public/utils/layer/layer.js"></script>
		<!-- debug 
<script type="text/javascript" src="http://127.0.0.1/fileSystem/Public/utils/plupload/moxie.js"></script>
<script type="text/javascript" src="http://127.0.0.1/fileSystem/Public/utils/plupload/plupload.dev.js"></script>
<script type="text/javascript" src="http://127.0.0.1/fileSystem/Public/utils/plupload/jquery.ui.plupload/jquery.ui.plupload.js"></script>
-->

	</head>

	<body style="font: 13px Verdana; background: #eee; color: #333">

		<!--	<h2 style="display: block;" id="drag_btn">上传文件</h2>-->
		<div id="uploader">
			<p>请确认你的浏览器支持 Flash 或 Silverlight 或 HTML5。</p>
		</div>
		<br />

		<script type="text/javascript">
			 // Initialize the widget when the DOM is ready
			$(function() {
				$currentDir = $.getUrlParam('currentPath');
				$currentDir = UrlDecode($currentDir);
				$("#uploader").plupload({
					//url设置
					runtimes: 'html5,flash,silverlight,html4',
					url: 'http://127.0.0.1/fileSystem/Public/utils/plupload/upload.php',
					//用户上传最大文件数量
					max_file_count: 20,
					chunk_size: '1mb',
					// 设置图片尺寸
					resize: {
						width: 200,
						height: 200,
						quality: 90,
						crop: true // crop to exact dimensions
					},
					filters: {
						// 可上传最大的文件大小
						max_file_size: '1000mb',
						// 上传文件类型
						mime_types: [{
							title: "Image files",
							extensions: "jpg,gif,png"
						}, {
							title: "Zip files",
							extensions: "zip"
						}]
					},
					
					multipart_params: {
					 	currentDir : $currentDir,
					},
					
					// 重命名
					rename: false,
					// 排序
					sortable: true,
					// 拖拽删除（html5）
					dragdrop: true,
					views: {
						list: true,
						thumbs: true, // 展示缩略图
						active: 'thumbs'
					},
					// Flash 设置
					flash_swf_url: 'http://127.0.0.1/fileSystem/Public/utils/plupload/Moxie.swf',
					// Silverlight 设置
					silverlight_xap_url: 'http://127.0.0.1/fileSystem/Public/utils/plupload/js/Moxie.xap'
				});
				
			// When all files are uploaded
				$('#uploader').on('complete', function() {
					layer.confirm("上传成功",{icon:3,title:'提示'},function(){
						var index = parent.layer.getFrameIndex(window.name);
					    parent.layer.close(index);
					});				
				});
			});
		</script>
	</body>

</html>