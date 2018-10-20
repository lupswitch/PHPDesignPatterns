<?php
/**
 * User: Script
 * Date: 20.10.2018
 * Time: 7:12
 */

namespace PHPDesignPatterns\Structural\Flyweight\TeaShop;


class TeaShop
{
    protected $orders;
    protected $teaMaker;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        $result = '';
        foreach ($this->orders as $table => $tea) {
            $result .= "Serving tea to table# " . $table.PHP_EOL;
        }

        return $result;
    }
}