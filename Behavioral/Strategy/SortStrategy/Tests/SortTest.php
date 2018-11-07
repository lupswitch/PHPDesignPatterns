<?php
/**
 * User: Script
 * Date: 06.11.2018
 * Time: 18:13
 */

namespace PHPDesignPatterns\Behavioral\Strategy\SortStrategy\Tests;


use PHPDesignPatterns\Behavioral\Strategy\SortStrategy\BubbleSortStrategy;
use PHPDesignPatterns\Behavioral\Strategy\SortStrategy\QuickSortStrategy;
use PHPDesignPatterns\Behavioral\Strategy\SortStrategy\Sorter;
use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{
    public function testMain()
    {
        $dataset = [1, 5, 4, 3, 2, 8];

        $sorter = new Sorter(new BubbleSortStrategy());
        $result = $sorter->sort($dataset);
        $this->assertEquals('Bubble', $result['sort']);

        $sorter = new Sorter(new QuickSortStrategy());
        $result = $sorter->sort($dataset);
        $this->assertEquals('Quick', $result['sort']);
    }
}