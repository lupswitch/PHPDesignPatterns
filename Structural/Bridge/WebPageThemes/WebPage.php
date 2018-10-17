<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 8:01
 */

namespace PHPDesignPatterns\Structural\Bridge\WebPageThemes;


interface WebPage
{
    public function __construct(Theme $theme);

    public function getContent();
}