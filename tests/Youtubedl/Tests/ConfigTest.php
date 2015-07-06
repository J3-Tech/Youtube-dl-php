<?php

namespace Youtubedl\Tests;

use Youtubedl\Config;

class ConfigTest extends \PHPUnit_Framework_TestCase
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
     */
    public function shouldCreateBinDirectory()
    {
        Config::makeBinDirectory();
        $this->assertTrue(Config::BinDirectoryExists());
    }
}
