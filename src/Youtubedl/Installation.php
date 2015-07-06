<?php

namespace Youtubedl;

use React\EventLoop\Factory;
use React\Stream\Stream;
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
        $loop = Factory::create();
        $file = Config::getBinFile();
        $url = 'https://yt-dl.org/downloads/latest/youtube-dl';
        $readStream = fopen($url, 'r');
        $writeStream = fopen($file, 'w');
        stream_set_blocking($readStream, 0);
        stream_set_blocking($writeStream, 0);
        $read = new Stream($readStream, $loop);
        $write = new Stream($writeStream, $loop);
        $read->on('end', function() use ($file) {
            chmod($file, 0777);
            echo "Finished downloading $file\n";
        });
        $read->pipe($write);
        $loop->run();
    }
}
