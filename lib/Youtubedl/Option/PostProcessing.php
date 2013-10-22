<?php

namespace Youtubedl\Option;

class PostProcessing extends Base{
	private $extractAudio;
	private $audioFormat;
	private $audioQuality;
	private $recodeVideo;
	private $keepVideo;
	private $noPostOverwrites;
	private $embedSubs;
	private $addMetadata;

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