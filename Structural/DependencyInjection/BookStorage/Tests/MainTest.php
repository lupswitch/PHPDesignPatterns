<?php
/**
 * User: Script
 * Date: 11.11.2018
 * Time: 6:45
 */

namespace PHPDesignPatterns\Structural\DependencyInjection\BookStorage\Tests;


use PHPDesignPatterns\Structural\DependencyInjection\BookStorage\Book;
use PHPDesignPatterns\Structural\DependencyInjection\BookStorage\BookStorage;
use PHPDesignPatterns\Structural\DependencyInjection\BookStorage\DatabaseConnect;
use PHPDesignPatterns\Structural\DependencyInjection\BookStorage\MysqlConnect;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testMain()
    {
        $book = new Book();
        $book->author = 'Фёдор Михайлович Достоевский';
        $book->title = 'Идиот';

        $database = new MysqlConnect();

        $this->assertInstanceOf(DatabaseConnect::class, $database);

        $bookStorage = new BookStorage($database);
        $result = $bookStorage->store($book);

        $this->assertEquals(1, $result);
    }
}