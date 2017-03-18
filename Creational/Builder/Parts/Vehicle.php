<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 26.02.2017
 * Time: 17:13
 */

namespace PHPDesignPatterns\Creational\Builder\Parts;


abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    
    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}