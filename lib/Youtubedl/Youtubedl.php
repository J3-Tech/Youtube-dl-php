<?php

namespace Youtubedl;

use Youtubedl\Option\Download;
use Youtubedl\Option\Authentication;
use Youtubedl\Option\Filesystem;
use Youtubedl\Option\Format;
use Youtubedl\Option\PostProcessing;
use Youtubedl\Option\Verbosity;
use Youtubedl\Option\Video;

class Youtubedl extends Client{

	protected $links=array();
	protected $output;
	private $download;
	private $authentication;
	private $filesystem;
	private $format;
	private $postProcessing;
	private $subtitle;
	private $video;

	/*public function getDownloadOption(){
		return ($this->download) ? $this->download:$this->download=new Download();
	}*/

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
		}
	}

	public function getExtractors($description=false){
		if($description){
			return array_filter(explode("\n",parent::run('extractor-descriptions')));
		}

		return array_filter(explode("\n", parent::run('list-extractors')));
	}

	public function getUserAgent(){
		return parent::run('dump-user-agent');
	}

	public function setOutput($output){
		$this->output=$output;

		return $this;
	}

	public function download($link){
		$cmd=null;
		if($this->output){
			$cmd="output {$this->output}/\"%(title)s.%(ext)s\" "; 
		}

		return parent::run($cmd.$link);
	}

}