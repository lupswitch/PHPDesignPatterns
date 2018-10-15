<?php
/**
 * User: Script
 * Date: 04.09.2017
 * Time: 6:33
 */

namespace PHPDesignPatterns\Structural\Adapter\BookAdapter;


class Book implements BookInterface
{
    private $page;

    public function open()
    {
        $this->page = 1;
    }

    public function turnPage()
    {
        $this->page++;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}