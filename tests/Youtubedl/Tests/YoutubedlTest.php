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
    public function shouldDownloads()
    {
        $this->youtubedl
            ->getOption()
            ->setOutput($this->getOutput());
        $this->assertInternalType('array', $this->downloads());
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

    /**
     * @test
     * @expectedException \Youtubedl\Exceptions\YoutubedlException
     */
    public function shouldThrowException()
    {
        $this->youtubedl->getOption()
                    ->getExtractors();
        $this->youtubedl->execute();
    }

    private function downloads()
    {
        return $this->youtubedl->download([
            'BaW_jenozKc',
            'BaW_jenozKc'
        ]);
    }

    private function download()
    {
        return $this->youtubedl->download('BaW_jenozKc');
    }

    private function getOutput()
    {
        return "tmp/%(title)s_{$this->getRand()}.%(ext)s";
    }

    private function getRand()
    {
        return mt_rand();
    }

    public function setup()
    {
        $this->youtubedl = new Youtubedl();
    }

    public function tearDown()
    {
        foreach (glob('./tmp/*') as $key => $value) {
            unlink($value);
        }
    }
}
