<?php
/**
 * User: Script
 * Date: 06.11.2018
 * Time: 18:10
 */

namespace PHPDesignPatterns\Behavioral\Strategy\SortStrategy;


interface SortStrategy
{
    public function sort(array $dataset): array;
}