<?php
/**
 * User: Script
 * Date: 04.09.2017
 * Time: 6:39
 */

namespace PHPDesignPatterns\Structural\Adapter\Tests;

use PHPDesignPatterns\Structural\Adapter\Book;
use PHPDesignPatterns\Structural\Adapter\EBookAdapter;
use PHPDesignPatterns\Structural\Adapter\Kindle;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }
}