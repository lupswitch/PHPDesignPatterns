<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 8:29
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes\Themes;


use PHPDesignPatterns\Structural\Bridge\WebPageThemes\Theme;

class AquaTheme implements Theme
{
    public function getColor()
    {
        return ' Light blue';
    }
}