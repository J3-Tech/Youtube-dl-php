<?php

namespace Youtubedl\Tests;

use PHPUnit\Framework\TestCase;
use Youtubedl\Installation;
use Youtubedl\Config;

class InstallationTest extends TestCase
{
    /**
     * @test
     */
    public function shouldPostInstall()
    {
        Installation::postInstall();
        $this->assertTrue(Config::binExists());
    }

    /**
     * @test
     * @depends shouldPostInstall
     */
    public function shouldPostUpdate()
    {
        Installation::postUpdate();
        $this->assertTrue(Config::binExists());
    }
}
