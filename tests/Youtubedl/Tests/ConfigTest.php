<?php

namespace Youtubedl\Tests;

use Youtubedl\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetBin()
    {
        $this->assertIsString(Config::getBinFile());
    }

    /**
     * @test
     */
    public function shouldExist()
    {
        $this->assertTrue(Config::binExists());
    }
}
