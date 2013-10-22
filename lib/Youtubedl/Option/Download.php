<?php

namespace Youtubedl\Option;

class Download extends Base{

	private $rateLimit;
	private $retries;
	private $bufferSize;
	private $noResizeBuffer=true;

	public function setRate($rate){
		$this->rateLimit=$rate;

		return $this;
	}

	public function setRetries($retries){
		$this->retries=$retries;

		return $this;
	}

	public function setBufferSize($buffer){
		$this->bufferSize=$size;

		return $this;
	}

	private function setNoResizeBuffer(){
		$this->noResizeBuffer=true;
	}

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