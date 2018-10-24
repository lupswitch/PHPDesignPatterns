<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 24.10.2018
 * Time: 17:47
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbControl;

/**
 * Class Bulb - Receiver class
 * @package PHPDesignPatterns\Behavioral\Command\BulbControl
 */
class Bulb
{
    public function turnOn()
    {
        echo "Bulb has been lit";
    }

    public function turnOff()
    {
        echo "Darkness!";
    }
}