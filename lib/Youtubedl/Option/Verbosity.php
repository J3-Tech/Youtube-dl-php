<?php

namespace Youtubedl\Option;

class Verbosity extends Base{
	private $quiet;
	private $simulate;
	private $skipDownload;
	private $getUrl;
	private $getTitle;
	private $getId;
	private $getThumbnail;
	private $getFilename;
	private $getFormat;
	private $newline;
	private $noprogress;
	private $consoleTitle;
	private $verbose;
	private $dumpIntermediatePages;

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