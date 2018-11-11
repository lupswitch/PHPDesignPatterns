<?php
/**
 * User: Script
 * Date: 11.11.2018
 * Time: 6:48
 */

namespace PHPDesignPatterns\Structural\DependencyInjection\BookStorage;


class MysqlConnect implements DatabaseConnect
{

    public function insert($table, array $data): int
    {
        return 1;
    }
}