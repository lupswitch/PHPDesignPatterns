<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 14.10.2018
 * Time: 19:36
 */

namespace PHPDesignPatterns\Creational\Singleton\President;


final class President
{
    private static $instance;

    /**
     * President constructor.
     */
    private function __construct()
    {
        // hide constructor
    }


    /**
     * @return President
     */
    public static function getInstance(): President
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    private function __clone()
    {
        // disable clone
    }

    private function __wakeup()
    {
        // disable unserializetion
    }
}