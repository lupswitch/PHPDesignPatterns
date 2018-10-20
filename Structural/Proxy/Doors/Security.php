<?php
/**
 * User: Script
 * Date: 20.10.2018
 * Time: 7:55
 */

namespace PHPDesignPatterns\Structural\Proxy\Doors;


class Security
{
    /**
     * @var Door
     */
    protected $door;

    /**
     * Security constructor.
     * @param Door $door
     */
    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password)
    {
        if ($this->authenticate($password)) {
            return $this->door->open();
        } else {
           return false;
        }
    }

    /**
     * @param $password
     * @return bool
     */
    public function authenticate($password)
    {
        return $password === '$ecr@t';
    }

    public function close()
    {
        return $this->door->close();
    }
}