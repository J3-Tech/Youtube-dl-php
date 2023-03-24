<?php

namespace Youtubedl;

class Config
{
    public static function binExists()
    {
        return file_exists(self::getBinFile());
    }

    public static function getBinDirectory()
    {
        $binDir = realpath(__DIR__ . '/../../vendor/bin');

        return $binDir;
    }

    public static function getBinFile()
    {
        return self::getBinDirectory().'/Youtubedl';
    }
}
