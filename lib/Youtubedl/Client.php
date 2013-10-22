<?php

namespace Youtubedl;

use Symfony\Component\Process\Process;
use Youtubedl\Option\Download;
use Youtubedl\Option\Authentication;
use Youtubedl\Option\Filesystem;
use Youtubedl\Option\Format;
use Youtubedl\Option\PostProcessing;
use Youtubedl\Option\Verbosity;
use Youtubedl\Option\Video;
use Youtubedl\Option\General;

class Client{

	protected $async 	=false;
	protected $verbose 	=false;
	protected $cacheDir =null;
	private $noCache 	=null;
	private $proxy 		=null;
	private $userAgent 	=null;
	private $noCheckCertificate=null;
	private $ignoreErrors=null;

	private $download;
	private $authentication;
	private $filesystem;
	private $format;
	private $postProcessing;
	private $subtitle;
	private $video;
	private $general;

	public function isAsync($bool=false){
		$this->async=$bool;

		return $this;
	}

	public function isVerbose($bool=false){
		$this->verbose=$bool;

		return $this;
	}

	public function __call($method,$args){
		preg_match("/get([A-Za-z]+)Option/",$method,$match);
		switch (strtolower($match[1])) {
			case 'authentication':
				return $this->authentication ? $this->authentication:$this->authentication=new Authentication();
			case 'download':
				return $this->download ? $this->downlad:$this->download=new Download();
			case 'filesystem':
				return $this->filesystem ? $this->filesystem:$this->filesystem=new Filesystem();
			case 'postprocessing':
				return $this->postProcessing ? $this->postProcessing:$this->postProcessing=new PostProcessing();
			case 'verbosity':
				return $this->verbosity ? $this->Verbosity:$this->verbosity=new Verbosity();
			case 'video':
				return $this->video? $this->video:$this->video=new Video();
			default:
				return $this->option ? $this->option:$this->option=new General();
		}
	}

	protected function run($cmd){
		$option= "{$this->general} {$this->authentication} ";
		$option.="{$this->download} {$this->filesystem} ";
		$option.="{$this->format} {$this->subtitle} ";
		$option.="{$this->video} {$this->verbosity} ";
		$option.="{$this->postProcessing}";
		$process=new Process("youtube-dl {$option} {$cmd}");
		if($this->verbose){
			$process->run(function($type,$buffer){
				if (Process::ERR === $type) {
			        echo 'ERR > '.$buffer;
			    } else {
			        echo 'OUT > '.$buffer;
			    }
			});
		}else{
			($this->async) ? $process->start():$process->run();
		}
		if (!$process->isSuccessful()) {
    		throw new \RuntimeException($process->getErrorOutput());
		}

		return trim($process->getOutput());
	}

}