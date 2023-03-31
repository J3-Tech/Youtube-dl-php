<?php

namespace Youtubedl;

use Symfony\Component\Process\Process;
use Youtubedl\Exceptions\YoutubedlException;

class Youtubedl
{
    private $async = false;
    private $verbose = false;
    private $option;
    private $link;

    public function __construct()
    {
        $this->option = new Option();
    }

    public function isAsync(bool $bool = false): Youtubedl
    {
        $this->async = $bool;

        return $this;
    }

    public function isVerbose(bool $bool = false): Youtubedl
    {
        $this->verbose = $bool;

        return $this;
    }

    public function getOption(): Option
    {
        return $this->option;
    }

    public function download(mixed $link): Youtubedl
    {
        if (is_array($link)) {
            $link = implode(' ', $link);
        }
        $this->link = $link;

        return $this;
    }

    public function execute(): array
    {
        $commands = array_filter(array_merge([Config::getBinFile(), $this->link], $this->option->format()));
        $process = new Process($commands);
        if ($this->verbose) {
            Helper::runProcess($process);
        } else {
            ($this->async) ? $process->start() : $process->run();
        }
        if (!$process->isSuccessful()) {
            throw new YoutubedlException($process->getErrorOutput());
        }

        return explode("\n", trim($process->getOutput()));
    }
}
