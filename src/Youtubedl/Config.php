<?php

namespace Youtubedl;

class Config
{
    public static function binExists(): bool
    {
        return file_exists(self::getBinFile());
    }

    public static function getBinDirectory(): string
    {
        $binDir = realpath(__DIR__ . '/../../vendor/bin');

        return $binDir;
    }

    public static function getBinFile(): string
    {
        return self::getBinDirectory().'/Youtubedl';
    }
}
