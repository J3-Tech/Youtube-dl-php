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
use Youtubedl\Exceptions\YoutubedlException;

class Youtubedl
{
    private $authentication;
    private $download;
    private $filesystem;
    private $format;
    private $general;
    private $postProcessing;
    private $subtitle;
    private $verbosity;
    private $video;
    private $async = false;
    private $verbose = false;
    private $option;

    public function isAsync($bool=false)
    {
        $this->async=$bool;

        return $this;
    }

    public function isVerbose($bool=false)
    {
        $this->verbose=$bool;

        return $this;
    }

    public function __call($method,$args)
    {
        if (preg_match("/get([A-Za-z]+)?Option/",$method,$match)) {
            if (isset($match[1])) {
                switch (strtolower($match[1])) {
                    case 'authentication':
                        return $this->authentication ? $this->authentication:$this->authentication=new Authentication();
                    case 'download':
                        return $this->download ? $this->download:$this->download=new Download();
                    case 'filesystem':
                        return $this->filesystem ? $this->filesystem:$this->filesystem=new Filesystem();
                    case 'postprocessing':
                        return $this->postProcessing ? $this->postProcessing:$this->postProcessing=new PostProcessing();
                    case 'verbosity':
                        return $this->verbosity ? $this->Verbosity:$this->verbosity=new Verbosity();
                    case 'video':
                        return $this->video? $this->video:$this->video=new Video();
                }
            } else {
                return $this->option ? $this->option:$this->option=new General();
            }
        }

    }

    public function download($link)
    {
        if (is_array($link)) {
            $link=implode(' ', $link);
        }

        return $this->execute($link);
    }

    public function execute($cmd=null)
    {
        $option ="{$this->general} {$this->authentication} ";
        $option.="{$this->download} {$this->filesystem} ";
        $option.="{$this->format} {$this->subtitle} ";
        $option.="{$this->video} {$this->verbosity} ";
        $option.="{$this->postProcessing}";
        $option.="{$this->option}";
        $process=new Process("youtube-dl {$option} -- {$cmd}");
        if ($this->verbose) {
            $process->run(function ($type,$buffer) {
                if (Process::ERR === $type) {
                    echo 'ERR > '.$buffer;
                } else {
                    echo 'OUT > '.$buffer;
                }
            });
        } else {
            ($this->async) ? $process->start():$process->run();
        }
        if (!$process->isSuccessful()) {
            throw new YoutubedlException($process->getErrorOutput());
        }

        if ($result=explode("\n",trim($process->getOutput()))) {
            if (count($result)>1) {
                return $result;
            }

            return $result[0];
        }
    }

}
