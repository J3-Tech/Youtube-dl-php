<?php

namespace Youtubedl;

use React\Stream\ReadableResourceStream;
use React\Stream\WritableResourceStream;
use Symfony\Component\Process\Process;

class Installation
{
    public static function postUpdate()
    {
        if (file_exists(Config::getBinFile())) {
            $process = new Process(Config::getBinFile().' -U');
            $process->run();
        } else {
            self::postInstall();
        }
    }

    public static function postInstall()
    {
        Config::makeBinDirectory();
        $file = Config::getBinFile();
        $url = 'https://yt-dl.org/downloads/latest/youtube-dl';
        $readStream = fopen($url, 'r');
        $writeStream = fopen($file, 'w');
        stream_set_blocking($readStream, 0);
        stream_set_blocking($writeStream, 0);
        $read = new ReadableResourceStream($readStream);
        $write = new WritableResourceStream($writeStream);
        $read->on('end', function() use ($file) {
            chmod($file, 0777);
            echo "Finished downloading $file\n";
        });
        $read->pipe($write);
    }
}
