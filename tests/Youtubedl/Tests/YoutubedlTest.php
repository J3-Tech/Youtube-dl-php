<?php

namespace Youtubedl\Tests;

use PHPUnit\Framework\TestCase;
use Youtubedl\Youtubedl;

class YoutubedlTest extends TestCase
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
    // public function shouldBeDownloadVerbosely()
    // {
    //     $this->youtubedl->isVerbose(true);
    //     $this->download();
    //     $this->assertIsArray($this->youtubedl->execute());
    // }

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
    public function shouldSetLink()
    {
        $this->youtubedl
            ->getOption()
            ->setOutput($this->getOutput());
        $this->assertInstanceOf('Youtubedl\Youtubedl', $this->download());
    }

    /**
     * @test
     */
    public function shouldSetLinks()
    {
        $this->youtubedl
            ->getOption()
            ->setOutput($this->getOutput());
        $this->assertInstanceOf('Youtubedl\Youtubedl', $this->downloads());
    }

    /**
     * @test
     * @expectedException \Youtubedl\Exceptions\YoutubedlException
     */
    // public function shouldThrowException()
    // {
    //     $this->youtubedl->getOption()
    //                 ->getExtractors();
    //     $this->youtubedl->execute();
    // }


    private function downloads()
    {
        return $this->youtubedl->download([
            'https://www.youtube.com/watch?v=BaW_jenozKc',
            'https://www.youtube.com/watch?v=BaW_jenozKc'
        ]);
    }

    private function download()
    {
        return $this->youtubedl
                    ->isVerbose(true)
                    ->download('https://www.youtube.com/watch?v=BaW_jenozKc');
    }

    private function getOutput()
    {
        return "./tmp/%(title)s_{$this->getRand()}.%(ext)s";
    }

    private function getRand()
    {
        return mt_rand();
    }

    public function setUp(): void
    {
        $this->youtubedl = new Youtubedl();
    }

    // public function tearDown(): void
    // {
    //     foreach (glob('./tmp/*') as $key => $value) {
    //         unlink($value);
    //     }
    // }
}
