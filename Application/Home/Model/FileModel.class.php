<?php
namespace Home\Model;
use Think\Model;

	class FileModel extends Model{
		public $fileName = null;
		public $type = 'folder';
		public $extensionName = null;
		public $currentPath = null;
		
		public function __construct($currentPath,$fileName,$type){
			$this->currentPath = $currentPath;
			$this->fileName = $fileName;
			$this->type = $type;
			if($type == 'file'){
				$this->extensionName = $this->getExtName($fileName);
			}else{
				$this->extensionName = null;
			}
		}
		
		private function getExtName($fileName){
			$extend = explode("." , $fileName); 
			return end($extend); 
		}
	}
?>