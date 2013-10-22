<?php

namespace Youtubedl\Option;

class Subtitle extends Base{
	private $writeSub;
	private $writeAutoSub;
	private $allSub;
	private $listSubs;
	private $subFormat;
	private $subLangs;

	public function __toString(){
		$output='';
		foreach (get_object_vars($this) as $key=>$var) {
			$option=$key;
			if(preg_match("/[A-Z]/",$key,$upper)){
				$option=str_replace($upper[0],'-'.strtolower($upper[0]),$key);
			}
			if($this->$key){
				$output.="--{$option} {$this->$key} ";
			}
		}
		return $output;
	}
}