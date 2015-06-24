<?php

namespace Youtubedl;

use Symfony\Component\Process\Process;
use Youtubedl\Exceptions\YoutubedlException;
use Youtubedl\Option\AbstractOption;
use Youtubedl\Option\Generic;
use Youtubedl\Factory\OptionCreator;

class Youtubedl
{
    private $authentication;
    private $download;
    private $filesystem;
    private $format;
    private $generic;
    private $postProcessing;
    private $subtitle;
    private $verbosity;
    private $video;
    private $async = false;
    private $verbose = false;

    public function isAsync($bool = false)
    {
        $this->async = $bool;

        return $this;
    }

    public function isVerbose($bool = false)
    {
        $this->verbose = $bool;

        return $this;
    }

    public function __call($method, $args)
    {
        if (preg_match('/get([A-Za-z]+)?Option/', $method, $match)) {
            $option = 'Generic';
            if (isset($match[1])) {
                $option = $match[1];
            }
            $property = lcfirst($option);
            if (property_exists($this, $property)) {
                if ($this->$property instanceof AbstractOption) {
                    return $this->$property;
                }

                $this->$property = OptionCreator::getInstance()->create($option);

                return $this->__call($method, $args);
            }
        }

        throw new YoutubedlException("Invalid method invoked - {$method}");
    }

    public function download($link)
    {
        if (is_array($link)) {
            $link = implode(' ', $link);
        }

        return $this->execute($link);
    }

    public function getOptions()
    {
        $options = null;
        foreach (get_object_vars($this) as $property => $value) {
            if ($value instanceof AbstractOption) {
                $options .= "{$value} ";
            }
        }

        return $options;
    }

    public function execute($cmd = null)
    {
        $process = new Process(Config::getBinFile()." {$this->getOptions()} {$cmd}");
        if ($this->verbose) {
            $process->run(function ($type, $buffer) {
                if (Process::ERR === $type) {
                    echo 'ERR > '.$buffer;
                } else {
                    echo 'OUT > '.$buffer;
                }
            });
        } else {
            ($this->async) ? $process->start() : $process->run();
        }
        if (!$process->isSuccessful()) {
            throw new YoutubedlException($process->getErrorOutput());
        }

        if ($result = explode("\n", trim($process->getOutput()))) {
            if (count($result)>1) {
                return $result;
            }

            return $result[0];
        }
    }
}
