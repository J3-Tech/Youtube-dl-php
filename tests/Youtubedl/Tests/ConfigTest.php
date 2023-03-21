<?php

namespace Youtubedl\Tests;

use Youtubedl\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    /**
     * @test
     */
    public function shouldDeleteBinDirectory()
    {
        Config::removeBinDirectory();
        $this->assertFalse(Config::BinDirectoryExists());
    }

    /**
     * @test
     * @depends shouldDeleteBinDirectory
     */
    public function shouldCreateBinDirectory()
    {
        Config::makeBinDirectory();
        $this->assertTrue(Config::BinDirectoryExists());
    }
}
