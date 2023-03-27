<?php

namespace Youtubedl;

use GuzzleHttp\Client;
use Symfony\Component\Process\Process;

class Installation
{
    public static function postUpdate(): void
    {
        if (file_exists(Config::getBinFile())) {
            self::setPermission();
            self::update();
        } else {
            self::postInstall();
        }
    }

    public static function postInstall(): void
    {
        self::download();
        self::setPermission();
        self::update();
    }

    private static function setPermission(): void
    {
        $process = new Process(['chmod', '+x', Config::getBinFile()]);
        $process->run();
    }

    private static function download(): void
    {
        $file = Config::getBinFile();
        $url = 'https://github.com/yt-dlp/yt-dlp/releases/latest/download/yt-dlp';
        $client = new Client([
            'verify' => false
        ]);
        $client->request('GET', $url, ['sink' => $file]);
    }

    private static function update(): void
    {
        $process = new Process([Config::getBinFile(), '-U']);
        $process->run(function ($type, $buffer) {
            echo "{$type} > {$buffer}";
        });
    }
}
