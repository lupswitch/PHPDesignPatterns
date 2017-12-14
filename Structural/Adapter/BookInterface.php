<?php
/**
 * User: Script
 * Date: 03.09.2017
 * Time: 20:40
 */

namespace PHPDesignPatterns\Structural\Adapter;


interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}