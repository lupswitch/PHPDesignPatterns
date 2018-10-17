<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 8:59
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes\Tests;


use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\About;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\Careers;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\Main;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Themes\LightTheme;
use PHPUnit\Framework\TestCase;

class LightThemeTest extends TestCase
{
    public static $theme = null;


    public static  function setUpBeforeClass()
    {
        self::$theme = new LightTheme();
    }

    public function testAboutPage()
    {
        $about = new About(self::$theme);

        $this->assertEquals('About page in  Off white', $about->getContent());
    }

    public function testCareersPage()
    {
        $careers = new Careers(self::$theme);

        $this->assertEquals('Careers page in  Off white', $careers->getContent());
    }

    public function testMainPage()
    {
        $careers = new Main(self::$theme);

        $this->assertEquals('Main/home page in  Off white', $careers->getContent());
    }
}