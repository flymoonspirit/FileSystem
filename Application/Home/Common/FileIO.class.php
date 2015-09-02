<?php
namespace Home\Common;

class FileIO {
	public function ListDir($dirname) {
		$encode = mb_detect_encoding($dirname, array('ASCII', 'UTF-8', 'GB2312', 'GBK', 'BIG5'));
		if ($encode == 'UTF-8') {
			$dirname = iconv("UTF-8", "gb2312", $dirname);
		}
		$Ld = dir($dirname);
		echo "<ul>";
		while (false !== ($entry = $Ld -> read())) {
			$checkdir = $dirname . "/" . $entry;
			if (is_dir($checkdir) && !preg_match("[^\.]", $entry)) {
				$checkdir = iconv("gb2312", "UTF-8", $checkdir);
				echo "<li><p>[ " . $checkdir . " ] 当前 <span style='color:#ff00aa'>是</span>目录</p></li>";
				$checkdir = iconv("UTF-8", "gb2312", $checkdir);
				$this -> ListDir($checkdir);
			} else {
				$entry = iconv("gb2312", "UTF-8", $entry);
				echo "<li><p>[ " . $entry . " ] 当前不是目录</p></li>";
				$entry = iconv("UTF-8", "gb2312", $entry);
			}
		}
		$Ld -> close();
		echo "</ul>";
	}

	public function getAllFile($filePath) {
		$rs = array();
		$encode = mb_detect_encoding($filePath, array('ASCII', 'UTF-8', 'GB2312', 'GBK', 'BIG5'));
		if ($encode == 'UTF-8') {
			$filePath = iconv("UTF-8", "gb2312", $filePath);
		}
		$fp = dir($filePath);
		while (false !== ($entry = $fp -> read())) {
			if ($entry != '.' && $entry != '..') {
				$checkdir = $filePath . "/" . $entry;
				$type = null;
				if (is_dir($checkdir) && !preg_match("[^\.]", $entry)) {
					$type = 'folder';
				} else {
					$type = 'file';
				}
				$checkdir = iconv("gb2312", "UTF-8", $checkdir);
				$entry = iconv("gb2312", "UTF-8", $entry);
				$File = new \Home\Model\FileModel($checkdir, $entry, $type);
				array_push($rs, $File);
			}
		}
		$fp -> close();
		return $rs;
	}

	public function delAllFile($filePath) {
		$rs = array();
		$encode = mb_detect_encoding($filePath, array('ASCII', 'UTF-8', 'GB2312', 'GBK', 'BIG5'));
		if ($encode == 'UTF-8') {
			$filePath = iconv("UTF-8", "gb2312", $filePath);
		}

		if (!is_dir($filePath)) {
			unlink($filePath);
		} else {
			$fh = dir($filePath);
			while (false != ($row = $fh -> read())) {
				$checkdir = $filePath . "/" . $row;
				if ($row == '.' || $row == '..') {
					continue;
				}

				if (!is_dir($checkdir)) {
					unlink($checkdir);
				}
				$this -> delAllFile($checkdir);
			}
			$fh -> close();
			rmdir($filePath);
		}
	}

	public function mkDir($dir) {
		$fileName = '新建文件夹';
		$dirPath = $dir .'/'.$fileName;
		$encode = mb_detect_encoding($dirPath, array('ASCII', 'UTF-8', 'GB2312', 'GBK', 'BIG5'));
		if ($encode == 'UTF-8') {
			$dirPath = iconv("UTF-8", "gb2312", $dirPath);
		}

		//判断是否存在
		while (is_dir($dirPath)) {
			$name = $fileName;
			$pattern = "/\(([0-9]+)\)$/";
			preg_match($pattern, $name, $str);
			if (count($str) == 0) {
				$name = $name . '(1)';
			} else {
				$nameI = $str[1] + 1;
				$nameI = '(' . $nameI . ')';
				$name = preg_replace($pattern, $nameI, $name);
			}
			$fileName = $name;
			$dirPath = $dir . '/'. $fileName;
			$dirPath = iconv('utf-8', 'gb2312', $dirPath);
		}

		mkdir($dirPath, 0777, true);
	}
	

	function downFile($file, $down_name){
		 //$suffix = substr($file,strrpos($file,'.')); //获取文件后缀
		 $down_name = $down_name; //新文件名，就是下载后的名字
		 //判断给定的文件存在与否 
		$encode = mb_detect_encoding($file, array('ASCII', 'UTF-8', 'GB2312', 'GBK', 'BIG5'));
		if ($encode == 'UTF-8') {
			$file = iconv("UTF-8", "gb2312", $file);
		}
		 if(!file_exists($file)){
		  die("您要下载的文件已不存在，可能是被删除");
		 } 
		 $fp = fopen($file,"r");
		 $file_size = filesize($file);
		 //下载文件需要用到的头
		 header("Content-type: application/octet-stream");
		 header("Accept-Ranges: bytes");
		 header("Accept-Length:".$file_size);
		 header("Content-Disposition: attachment; filename=".$down_name);
		 $buffer = 1024;
		 $file_count = 0;
		 //向浏览器返回数据 
		 while(!feof($fp) && $file_count < $file_size){
		  $file_con = fread($fp,$buffer);
		  $file_count += $buffer;
		  echo $file_con;
		 } 
		 fclose($fp);
	}
	
	public function reNameFile($old_name,$new_name,$currentPath){
		$encode = mb_detect_encoding($old_name, array('ASCII', 'UTF-8', 'GB2312', 'GBK', 'BIG5'));
		if ($encode == 'UTF-8') {
			$old_name = iconv("UTF-8", "gb2312", $old_name);
		}
		if(is_dir($old_name)){
			$dirPath = $currentPath.'/'.$new_name;
			$dirPath = iconv("UTF-8", "gb2312", $dirPath);
			
			while (is_dir($dirPath)) {
				$name = $new_name;
				$pattern = "/\(([0-9]+)\)$/";
				preg_match($pattern, $name, $str);
				if (count($str) == 0) {
					$name = $name . '(1)';
				} else {
					$nameI = $str[1] + 1;
					$nameI = '(' . $nameI . ')';
					$name = preg_replace($pattern, $nameI, $name);
				}
				$new_name = $name;
				$dirPath = $currentPath . '/'. $new_name;
				$dirPath = iconv('utf-8', 'gb2312', $dirPath);
			}
			rename($old_name,$dirPath);
		}
		
		
		if(is_file($old_name)){
			$filePath = $currentPath.'/'.$new_name;
			$filePath = iconv("UTF-8", "gb2312", $filePath);
			while(file_exists($filePath)){
				$fileName = $new_name;
				$pos = strripos($fileName,'.');
				$name = substr($fileName, 0,$pos);
				$ext = substr($fileName, $pos);
					
				$pattern = "/\(([0-9]+)\)$/";
				preg_match($pattern, $name,$str);
				if(count($str) == 0){
					$name = $name.'(1)';
				}else{
					$nameI = $str[1] + 1;
					$nameI = '('.$nameI.')';
					$name = preg_replace($pattern, $nameI, $name);
				}
				$fileName = $name.$ext;
				$new_name = $fileName;
				$filePath = $currentPath.'/'.$new_name;
				$filePath = iconv("UTF-8", "gb2312", $filePath);
			}
			rename($old_name,$filePath);
		}
	}

}
