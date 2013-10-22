<?php

namespace Youtubedl;

class Youtubedl extends Client{

	protected $links=array();
	protected $output;

	public function getExtractors($description=false){
		if($description){
			return array_filter(explode("\n",parent::run('--extractor-descriptions')));
		}

		return array_filter(explode("\n", parent::run('--list-extractors')));
	}

	public function getUserAgent(){
		return parent::run('--dump-user-agent');
	}

	public function setOutput($output){
		$this->output=$output;

		return $this;
	}

	public function download($link){
		$cmd=null;
		if($this->output){
			$cmd="-o{$this->output}/\"%(title)s.%(ext)s\" "; 
		}

		return parent::run($cmd.$link);
	}

}