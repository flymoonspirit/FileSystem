<?php
namespace Home\Controller;
use Think\Controller;

class FileController extends Controller {
    public function getAllFileByDir(){
    	$dir = I('currentPath');
		$fileIO = new \Home\Common\FileIO();
		session('currentPath',$dir);
		$fileList = $fileIO->getAllFile($dir);
		$count = count($fileList);
		$this->ajaxReturn(array('fileList'=>$fileList,'count'=>$count));
	}
	
	public function delAllFileByDir(){
		$dir = I('currentPath');
		
		$fileIO = new \Home\Common\FileIO();
	
		$fileIO->delAllFile($dir);
		
		$this->ajaxReturn(array('status'=>1));
	}
	
	public function mkDir(){
		$rootPath = C('FILE_ROOT_PATH');
		$dir = $rootPath;
		if (isset($_SESSION['currentPath'])) {
			$dir = session('currentPath');
		}
		$fileIO = new \Home\Common\FileIO();
	
		$fileIO->mkDir($dir);
		
		$this->ajaxReturn(array('status'=>1));
	}
	
	public function downFile(){
		$dir = I('currentPath');
		$fileName = I('fileName');
		$fileIO = new \Home\Common\FileIO();
		$fileIO->downFile($dir,$fileName);
	}
	
	public function reNameFile(){
		$rootPath = C('FILE_ROOT_PATH');
		$currentPath = $rootPath;
		if (isset($_SESSION['currentPath'])) {
			$currentPath = session('currentPath');
		}
		$old_name = I('old_name');
		$new_name = I('new_name');
		$fileIO = new \Home\Common\FileIO();
		$fileIO->reNameFile($old_name,$new_name,$currentPath);
		$this->ajaxReturn(array('status'=>1));
	}
}