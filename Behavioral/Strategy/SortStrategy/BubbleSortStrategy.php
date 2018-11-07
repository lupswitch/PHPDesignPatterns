<?php
/**
 * User: Script
 * Date: 06.11.2018
 * Time: 18:11
 */

namespace PHPDesignPatterns\Behavioral\Strategy\SortStrategy;


class BubbleSortStrategy implements SortStrategy
{
    public function sort(array $dataSet): array
    {
        // Do sorting
        return [
            0 => $dataSet,
            'sort' => 'Bubble'
        ];
    }
}