<?php
/**
 * User: Script
 * Date: 23.10.2018
 * Time: 5:25
 */

namespace PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments;


class Bank extends Account
{
    protected $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}