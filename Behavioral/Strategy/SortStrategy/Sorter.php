<?php
/**
 * User: Script
 * Date: 06.11.2018
 * Time: 18:12
 */

namespace PHPDesignPatterns\Behavioral\Strategy\SortStrategy;


class Sorter
{
    protected $sorter;

    public function __construct(SortStrategy $sorter)
    {
        $this->sorter = $sorter;
    }

    public function sort(array $dataSet): array
    {
        return $this->sorter->sort($dataSet);
    }
}