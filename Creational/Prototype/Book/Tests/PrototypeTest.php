<?php
/**
 * User: Script
 * Date: 03.09.2017
 * Time: 18:05
 */

namespace PHPDesignPatterns\Creational\Prototype\Book\Tests;

use PHPDesignPatterns\Creational\Prototype\Book\BusinessBookPrototype;
use PHPDesignPatterns\Creational\Prototype\Book\HistoryBookPrototype;
use PHPUnit\Framework\TestCase;

/**
 * Class PrototypeTest
 * @package DesignPatterns\Creational\Prototype\Tests
 */
class PrototypeTest extends TestCase
{

    public function testCanGetBooks()
    {
        $historyPrototype = new HistoryBookPrototype();
        $businessPrototype = new BusinessBookPrototype();

        for ($i = 0; $i < 100; $i++) {
            $book = clone $businessPrototype;
            $book->setTitle('Business Book No ' . $i);
            $this->assertInstanceOf(BusinessBookPrototype::class, $book);
        }

        for ($i = 0; $i < 100; $i++) {
            $book = clone $historyPrototype;
            $book->setTitle('History Book No ' . $i);
            $this->assertInstanceOf(HistoryBookPrototype::class, $book);
        }
    }
}