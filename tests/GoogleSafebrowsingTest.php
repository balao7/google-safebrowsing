<?php
namespace Limonte\Tests;

use Limonte\GoogleSafebrowsing;

class GoogleSafebrowsingTest extends \PHPUnit_Framework_TestCase
{
    private $checker;

    public function __construct()
    {
        $this->checker = new GoogleSafebrowsing;
    }

    public function testOk()
    {
        $this->assertEquals(
            GoogleSafebrowsing::OK,
            $this->checker->check('https://google.com')
        );
    }

    public function testSuspicious()
    {
        $this->assertEquals(
            GoogleSafebrowsing::SUSPICIOUS,
            $this->checker->check('http://gfx.glittergraphicsnow.com')
        );
    }

    /**
     * @expectedException Exception
     */
    public function testInvalidUrl()
    {
        $this->checker->check('invalid URL');
    }
}
