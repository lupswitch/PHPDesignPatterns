<?php
/**
 * User: Script
 * Date: 28.10.2018
 * Time: 18:44
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbOnOff;

/**
 * Class Bulb - class Receiver
 * @package PHPDesignPatterns\Behavioral\Command\BulbOnOff
 */
class Bulb
{
    public $statusLight = false;

    /**
     * @return bool
     */
    public function isLight()
    {
        return (bool) $this->statusLight;
    }

    /**
     * @return $this
     */
    public function turnOn()
    {
        $this->statusLight = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function turnOff()
    {
        $this->statusLight = false;
        return $this;
    }
}