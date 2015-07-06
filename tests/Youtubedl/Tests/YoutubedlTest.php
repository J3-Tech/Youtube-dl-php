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
        $this->assertInternalType('string', $this->youtubedl->download('BaW_jenozKc'));
    }

    /**
     * @test
     */
    public function shouldAsyncDownload()
    {
        $this->youtubedl->isAsync(true);
        $this->assertInternalType('string', $this->youtubedl->download('BaW_jenozKc'));
    }

    /**
     * @test
     */
    public function shouldVerboseDownload()
    {
        $this->youtubedl->isVerbose(true);
        $this->assertInternalType('string', $this->youtubedl->download('BaW_jenozKc'));
    }

    public function setup()
    {
        $this->youtubedl = new Youtubedl();
    }
}
