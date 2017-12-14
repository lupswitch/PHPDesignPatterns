<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 19:57
 */

namespace PHPDesignPatterns\Structural\Bridge;


class HelloWorldService extends Service
{
    public function get()
    {
        return $this->implementation->format('Hello World');
    }
}