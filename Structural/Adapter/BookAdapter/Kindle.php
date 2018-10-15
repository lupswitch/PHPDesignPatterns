<?php
/**
 * User: Script
 * Date: 04.09.2017
 * Time: 6:38
 */

namespace PHPDesignPatterns\Structural\Adapter\BookAdapter;


class Kindle implements EBookInterface
{
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 100;

    public function pressNext()
    {
        $this->page++;
    }

    public function unlock()
    {
    }

    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}