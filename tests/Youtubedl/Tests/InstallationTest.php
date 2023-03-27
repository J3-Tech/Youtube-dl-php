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
    public function shouldPostInstall(): void
    {
        Installation::postInstall();
        $this->assertTrue(Config::binExists());
    }

    /**
     * @test
     */
    public function shouldPostInstallWithoutBinary(): void
    {
        unlink(Config::getBinFile());
        Installation::postInstall();
        $this->assertTrue(Config::binExists());
    }

    /**
     * @test
     * @depends shouldPostInstall
     */
    public function shouldPostUpdate(): void
    {
        Installation::postUpdate();
        $this->assertTrue(Config::binExists());
    }

    /**
     * @test
     * @depends shouldPostInstall
     */
    public function shouldPostUpdateWithoutBinary(): void
    {
        unlink(Config::getBinFile());
        Installation::postUpdate();
        $this->assertTrue(Config::binExists());
    }
}
