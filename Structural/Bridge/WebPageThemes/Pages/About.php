<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 8:04
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes\Pages;


use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Theme;
use PHPDesignPatterns\Structural\Bridge\WebPageThemes\WebPage;

class About implements WebPage
{

    protected $theme;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent()
    {
        return "About page in " . $this->theme->getColor();
    }
}