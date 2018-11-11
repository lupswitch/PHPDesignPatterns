<?php
/**
 * User: Script
 * Date: 11.11.2018
 * Time: 6:47
 */

namespace PHPDesignPatterns\Structural\DependencyInjection\BookStorage;


interface DatabaseConnect
{
    public function insert($table, array $data): int;
}