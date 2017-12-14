<?php
/**
 * User: Script
 * Date: 04.09.2017
 * Time: 6:33
 */

namespace PHPDesignPatterns\Structural\Adapter;


class EBookAdapter
{
    protected $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}