<?php
namespace Youtubedl\Tests;

use Youtubedl\Youtubedl;
use Youtubedl\Option;

class OptionTest extends \PHPUnit_Framework_TestCase
{
    protected $option;

    /**
     * @test
     */
    public function shouldBeOption()
    {
        $this->assertInstanceOf('Youtubedl\Option', $this->option->getListExtractors());
    }

    /**
     * @test
     */
    public function shouldBeString()
    {
        $this->assertInternalType('string', (string)$this->option);
    }

    public function setup()
    {
        $this->option = new Option();
    }
}
