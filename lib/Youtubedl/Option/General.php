<?php

namespace Youtubedl\Option;

class General extends Base{
	private $help;
	private $ignoreErrors;
	private $abortOnError;
	private $dumpUserAgent;
	private $userAgent;
	private $referer;
	private $listExtractors;
	private $extractorDescriptions;
	private $proxy;
	private $noCheckCertificate;
	private $cacheDir;
	private $noCacheDir;

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