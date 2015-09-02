<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index() {
		$fileIO = new \Home\Common\FileIO();
		$rootPath = C('FILE_ROOT_PATH');
		$dir = $rootPath;
		if (isset($_SESSION['currentPath'])) {
			$dir = session('currentPath');
		}
		
		$fileList = $fileIO -> getAllFile($dir);
		
		$rsPath = array();
		$rsName = array();
		$pa = '/';
		$rs = explode($pa, $dir);
		
		$tmpPath = $rootPath;
		for ($i = 2; $i < count($rs); $i++) {
			if($rs[$i] != ''){
				$tmpPath = $tmpPath . '/' . $rs[$i];
			    array_push($rsPath, $tmpPath);
			    array_push($rsName, $rs[$i]);
			}
			
		}
//		$prePath = $rootPath;
//		$rsNameLen = count($rsName);
//		for($i=0; $i<($rsNameLen-1); $i++){
//			$prePath = $prePath.'/'.$rsName[$i];
//		}
//		$this->prePath = $prePath;
		$this ->rsName = $rsName;
		$this ->rsPath = $rsPath;
		$this -> rootPath = $rootPath;
		$this -> fileList = $fileList;
		$this -> display();
	}

	public function test() {
		//		$str = 'helo.123.txt';
		//		$p = strripos($str,'#');
		//		echo $p;

		//		$name = substr($str, 0,8);
		//		echo $name;
		//		echo '</br>';
		//		$ext = substr($str, 8);
		//		echo $ext;

		//		$subject = "hello(2)(12)";
		//		$pattern = "/\(([0-9]+)\)$/";
		//		preg_match($pattern, $subject,$str);
		//		dump($str);
		//		echo preg_replace($pattern, "(13)", $subject);

		$dirList = 'a/b/c';
		$pa = '/';
		$rs = explode($pa, $dirList);
		dump($rs);

	}

}
