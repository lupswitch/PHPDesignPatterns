<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 8:28
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes\Themes;


use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Theme;

class DarkTheme implements Theme
{

    public function getColor()
    {
        return ' Dark Black';
    }
}