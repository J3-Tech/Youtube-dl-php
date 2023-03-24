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
            self::setPermission(function(){
                self::update();
            });
        } else {
            self::postInstall();
        }
    }

    public static function postInstall()
    {
        self::download(function() {
            self::setPermission(function() {
                self::update();
            });
        });
    }

    private static function setPermission($callback)
    {
        $process = new Process(['chmod', '+x', Config::getBinFile()]);
        $process->run(function ($type, $buffer) use ($callback) {
            if (Process::ERR === $type) {
                echo 'ERR > '.$buffer;
            } else {
                echo 'OUT > '.$buffer;
                $callback();
            }
        });
    }

    private static function download($callback)
    {
        $file = Config::getBinFile();
        $url = 'https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp';
        $readStream = fopen($url, 'r');
        $writeStream = fopen($file, 'w');
        stream_set_blocking($readStream, 0);
        stream_set_blocking($writeStream, 0);
        $read = new ReadableResourceStream($readStream);
        $write = new WritableResourceStream($writeStream);
        $read->on('end', function() use ($file, $callback) {
            $callback();
            echo "Finished downloading $file\n";
        });
        $read->pipe($write);
    }

    private static function update() {
        $process = new Process([Config::getBinFile(), '-U']);
        $process->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                echo 'ERR > '.$buffer;
            } else {
                echo 'OUT > '.$buffer;
            }
        });
    }
}
