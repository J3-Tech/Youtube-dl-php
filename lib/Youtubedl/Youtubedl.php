<?php

namespace Youtubedl;

use Symfony\Component\Process\Process;

class Youtubedl{

	protected $async=false;
	protected $extractors=array();
	protected $links=array();
	protected $output;

	public function __construct($link=null,$output=null){
		$process=new Process("youtube-dl --list-extractors");
		$process->run();

		if (!$process->isSuccessful()) {
		    throw new \RuntimeException($process->getErrorOutput());
		}
		$this->extractors=explode("\n",$process->getOutput());
		if($output){
			$this->output=$output;
		}else{
			$this->output=sys_get_temp_dir();
		}
		$this->link=$link;
	}

	public function isAsync($bool=true){
		$this->async=$bool;

		return $this;
	}

	public function getExtractors(){
		return $this->extractors;
	}

	public function download($verbose=false){
		$process = new Process("youtube-dl -o{$this->output}/\"%(title)s.%(ext)s\" {$this->link}");
		if($verbose){
			$process->run(function($type,$buffer){
				if (Process::ERR === $type) {
			        echo 'ERR > '.$buffer;
			    } else {
			        echo 'OUT > '.$buffer;
			    }
			});
		}elseif($this->async){
			$process->start();
		}else{
			$process->run();
		}
	}

}