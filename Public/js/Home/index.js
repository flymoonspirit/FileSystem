$(function() {
	$height = $(window).height() - 182 + "px";
	$('#right_content').css({
		"height": $height
	});
});

$(window).resize(function() {
	$height = $(window).height() - 182 + "px";
	$('#right_content').css({
		"height": $height
	});
});

$(function() {
	//定义setTimeout执行方法
	var TimeFn = null;
	$(document).on('click', '.content_item', function() {
		//取消上次延迟是未执行的方法
		clearTimeout(TimeFn);
		This = $(this).children('div');
		//执行延迟
		TimeFn = setTimeout(function() {
			$is_selected = This.children('.is_selected').val();
			if ($is_selected == '0') { //未被选中
				This.css({
					'background-color': '#ccc'
				});
				$is_selected = 1;
			} else { //已经被选中
				This.css({
					'background-color': '#fff'
				});
				$is_selected = 0;
			}
			This.children('.is_selected').val($is_selected);
		}, 300);

	});

	$(document).on('dblclick', '.content_item', function() {
		//取消上次延时未执行的方法
		clearTimeout(TimeFn);
		This = $(this).children('div');
		dbFn(This);
	});

	//双击事件
	function dbFn(obj) {
		$currentPath = obj.children('input[name="currentPath"]').val().trim();
		$fileName = obj.children('a').text().trim();
		$type = obj.children('input[name="type"]').val().trim();
		if ($type == 'folder') {
			$url = $baseUrl + '/index.php?m=Home&c=File&a=getAllFileByDir';
			$.post($url, {
					currentPath: $currentPath
				},
				function(data) {
					var content_tpl_html = template('content_tpl', data);
					$('#right_content').html(content_tpl_html);
					var $html = '<li><a class="breadcrumb_item" href="javascript:void(0)" data-path="' + $currentPath + '">' + $fileName + '</a></li>';
					$('#breadcrumb').append($html);
					$('#return_pre').text('返回上一级');
					$('#fileCount').text('已全部加载，共' + data.count + '个');

				});
		} else {
			return false;
		}

	}

	//鼠标经过时的事件
	$(document).on('mouseover', '.content_item', function() {
		$(this).children('div').children('.sp_btn').css({
			'display': 'block'
		});
	});

	$(document).on('mouseout', '.content_item', function() {
		$(this).children('div').children('.sp_btn').css({
			'display': 'none'
		});
	});

	//面包屑导航事件
	$(document).on('click', '.breadcrumb_item', function() {
		This = $(this);
		$currentPathVal = This.attr('data-path').trim();
		$url = $baseUrl + '/index.php?m=Home&c=File&a=getAllFileByDir';
		$.post($url, {
				currentPath: $currentPathVal
			},
			function(data) {
				var content_tpl_html = template('content_tpl', data);
				$('#right_content').html(content_tpl_html);
				This.parent('li').nextAll('li').remove();
				$data_root = This.attr('data-root');
				if ($data_root == 'root') {
					$('#return_pre').text('没有上一级');
				}
				$('#fileCount').text('已全部加载，共' + data.count + '个');
			});
	});

	$('#return_pre').click(function() {
		$size = $('#breadcrumb li').size();
		if ($size > 1) {
			$('#breadcrumb li').eq(-2).children('a').click();
			if ($size == 2) {
				$(this).text('没有上一级');
			}
		} else {
			return false;
		}
	});

	//下载
	$(document).on('click', '.item_down', function() {
		$dir_down = $(this).parent('span').prev('input[name="currentPath"]').val().trim();
		$fileName = $(this).parent('span').parent('div').children('a').text().trim();
		$url = $baseUrl + '/index.php?m=Home&c=File&a=downFile&currentPath=' + $dir_down + '&fileName=' + $fileName;
		window.location.href = $url
			//		$.post($url, {
			//				currentPath: $dir_down,
			//				fileName: $fileName
			//			},
			//			function(data) {
			//				if(data.status == 1){
			//					layer.alert('下载完成');
			//				}
			//			});	
	});

	//删除
	$(document).on('click', '.item_del', function() {
		$dir_del = $(this).parent('span').prev('input[name="currentPath"]').val().trim();

		This = $(this);
		$currentPathVal = $dir_del;
		$url = $baseUrl + '/index.php?m=Home&c=File&a=delAllFileByDir';
		$.post($url, {
				currentPath: $currentPathVal
			},
			function(data) {
				if (data.status == 1) {
					$('#breadcrumb li').eq(-1).children('a').click();
				}
			});
	});

	//新建文件夹
	$('#mkDir').click(function() {
		This = $(this);
		$url = $baseUrl + '/index.php?m=Home&c=File&a=mkDir';
		$.post($url, {},
			function(data) {
				if (data.status == 1) {
					$('#breadcrumb li').eq(-1).children('a').click();
				}
			});
	});

	//文件重命名
	$(document).on('click', '.item_rename', function() {
		$old_name = $(this).parent('span').prev('input[name="currentPath"]').val().trim();
		This = $(this);
		layer.prompt({
			title: '请文件名(含扩展名)，并确认',
			formType: 2 //prompt风格，支持0-2
		}, function(text) {
			$new_name = text;
			$url = $baseUrl + '/index.php?m=Home&c=File&a=reNameFile';
			$.post($url, {
					old_name: $old_name,
					new_name: $new_name
				},
				function(data) {
					if (data.status == 1) {
						$('#breadcrumb li').eq(-1).children('a').click();
						layer.closeAll();
					}
				});
		});

	});

	//全选按钮
	$('#all_check').on('change', function() {
		if ($('#all_check:checked').val()) {
			$('.content_item').css({'background-color':'#ccc'});
		}else{
			$('.content_item').css({'background-color':'#fff'});
		}
	})

});