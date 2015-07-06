<?php

namespace Youtubedl\Tests;

use Youtubedl\Youtubedl;

class YoutubedlTest extends \PHPUnit_Framework_TestCase
{
    protected $youtubedl;

    /**
     * @test
     */
    public function shouldBeAsync()
    {
        $this->assertInstanceOf('Youtubedl\Youtubedl', $this->youtubedl->isAsync(true));
    }

    /**
     * @test
     */
    public function shouldBeVerbose()
    {
        $this->assertInstanceOf('Youtubedl\Youtubedl', $this->youtubedl->isVerbose(true));
    }

    /**
     * @test
     */
    public function shouldHaveOption()
    {
        $this->assertInstanceOf('Youtubedl\Option', $this->youtubedl->getOption());
    }

    /**
     * @test
     */
    public function shouldDownload()
    {
        $this->youtubedl
            ->getOption()
            ->setOutput($this->getOutput());
        $this->assertInternalType('array', $this->download());
    }

    /**
     * @test
     */
    public function shouldVerboseDownload()
    {
        $this->youtubedl
            ->isVerbose(true)
            ->getOption()
            ->setOutput($this->getOutput());
        $this->assertInternalType('array', $this->download());
    }

    private function download()
    {
        return $this->youtubedl->download('BaW_jenozKc');
    }

    private function getOutput()
    {
        return "'%(title)s.%(ext)s_{$this->getRand()}'";
    }

    private function getRand()
    {
        return mt_rand();
    }

    public function setup()
    {
        $this->youtubedl = new Youtubedl();
    }
}
