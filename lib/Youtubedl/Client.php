<?php

namespace Youtubedl;

use Symfony\Component\Process\Process;

class Client{

	protected $async 	=false;
	protected $verbose 	=false;
	protected $cacheDir =null;
	private $noCache 	=null;
	private $proxy 		=null;
	private $userAgent 	=null;
	private $noCheckCertificate=null;
	private $ignoreErrors=null;

	public function isAsync($bool=false){
		$this->async=$bool;

		return $this;
	}

	public function isVerbose($bool=false){
		$this->verbose=$bool;

		return $this;
	}

	public function setCacheDir($cacheDir){
		$this->cacheDir="--cache-dir {$cacheDir}";

		return $this;
	}

	public function setNoCache(){
		$this->noCache="--no-cache-dir";

		return $this;
	}

	public function setNoCheckCertificate(){
		$this->noCheckCertificate="--no-check-certificates";
	}

	public function setProxy($url){
		$this->proxy="--proxy {$url}";

		return $this;
	}

	public function setUserAgent($userAgent){
		$this->userAgent="--user-agent {$userAgent}";

		return $this;
	}

	public function setIgnoreErrors($bool=false){
		if($bool){
			$this->ignoreErrors="--ignore-errors";
		}

		return $this;
	}

	protected function run($cmd){
		$process=new Process("youtube-dl {$cmd}");
		if($this->verbose){
			$process->run(function($type,$buffer){
				if (Process::ERR === $type) {
			        echo 'ERR > '.$buffer;
			    } else {
			        echo 'OUT > '.$buffer;
			    }
			});
		}
		($this->async) ? $process->start():$process->run();
		if (!$process->isSuccessful()) {
    		throw new \RuntimeException($process->getErrorOutput());
		}

		return trim($process->getOutput());
	}

}