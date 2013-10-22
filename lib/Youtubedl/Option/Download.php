<?php

namespace Youtubedl\Option;

class Download extends Base{

	private $rate;
	private $retries;
	private $bufferSize;
	private $noResizeBuffer;

	public function setRate($rate){
		$this->rate=$rate;

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

	/*public function __invoke(){
		$options="";
		foreach (get_class_vars($this) as $var) {
			if($this->$var){
				$options.="--{$var}"
			}
		}
	}*/
}