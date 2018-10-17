<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 9:00
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes\Tests;

use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\About;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\Careers;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\Main;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Themes\AquaTheme;
use PHPUnit\Framework\TestCase;

class AquaThemeTest extends TestCase
{
    public static $theme = null;


    public static  function setUpBeforeClass()
    {
        self::$theme = new AquaTheme();
    }

    public function testAboutPage()
    {
        $about = new About(self::$theme);

        $this->assertEquals('About page in  Light blue', $about->getContent());
    }

    public function testCareersPage()
    {
        $careers = new Careers(self::$theme);

        $this->assertEquals('Careers page in  Light blue', $careers->getContent());
    }

    public function testMainPage()
    {
        $careers = new Main(self::$theme);

        $this->assertEquals('Main/home page in  Light blue', $careers->getContent());
    }
}