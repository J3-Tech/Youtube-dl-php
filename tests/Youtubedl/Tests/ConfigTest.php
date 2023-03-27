<?php

namespace Youtubedl\Tests;

use Youtubedl\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetBin(): void
    {
        $this->assertIsString(Config::getBinFile());
    }

    /**
     * @test
     */
    public function shouldExist(): void
    {
        $this->assertTrue(Config::binExists());
    }
}
