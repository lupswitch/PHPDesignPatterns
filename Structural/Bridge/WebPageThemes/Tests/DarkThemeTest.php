<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 8:30
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes\Tests;

use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Themes\DarkTheme;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\About;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\Careers;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages\Main;
use PHPUnit\Framework\TestCase;


class  DarkThemeTest extends TestCase
{
    public static $theme = null;


    public static  function setUpBeforeClass()
    {
        self::$theme = new DarkTheme();
    }

    public function testAboutPage()
    {
        $about = new About(self::$theme);

        $this->assertEquals('About page in  Dark Black', $about->getContent());
    }

    public function testCareersPage()
    {
        $careers = new Careers(self::$theme);

        $this->assertEquals('Careers page in  Dark Black', $careers->getContent());
    }

    public function testMainPage()
    {
        $careers = new Main(self::$theme);

        $this->assertEquals('Main/home page in  Dark Black', $careers->getContent());
    }
}