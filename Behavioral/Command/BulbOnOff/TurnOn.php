<?php
/**
 * User: Script
 * Date: 28.10.2018
 * Time: 18:48
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbOnOff;


class TurnOn implements Command
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOn();
    }

    public function undo()
    {
        $this->bulb->turnOff();
    }

    public function redo()
    {
        $this->execute();
    }
}