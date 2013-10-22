<?php

namespace Youtubedl\Option;

class Filesystem extends Base{
	private $title;
	private $id;
	private $autoNumber;
	private $output;
	private $autoNumberSize;
	private $restrictFilenames;
	private $batchFile;
	private $noOverwrites;
	private $continue;
	private $noContinue;
	private $cookie;
	private $noPart;
	private $noMtime;
	private $writeDescription;
	private $writeInfoJson;
	private $writeAnnotations;
	private $writeThumnail;

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