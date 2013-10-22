<?php

namespace Youtubedl\Option;

class Video extends Base{
	private $playlistStart;
	private $playlistEnd;
	private $matchTitle;
	private $rejectTitle;
	private $maxDownloads;
	private $minFilesize;
	private $maxFilesize;
	private $date;
	private $datebefore;
	private $dateafter;
	private $noPlaylist;
	private $ageLimit;
	private $downloadArchive;

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