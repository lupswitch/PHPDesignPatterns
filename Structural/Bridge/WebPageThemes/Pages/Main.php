<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 8:05
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages;


use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Theme;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\WebPage;

class Main implements WebPage
{
    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "Main/home page in " . $this->theme->getColor();
    }
}