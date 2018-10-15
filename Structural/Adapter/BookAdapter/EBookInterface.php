<?php
/**
 * User: Script
 * Date: 04.09.2017
 * Time: 6:38
 */

namespace PHPDesignPatterns\Structural\Adapter\BookAdapter;


interface EBookInterface
{
    public function unlock();

    public function pressNext();

    public function getPage(): array;
}