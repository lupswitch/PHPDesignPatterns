<?php
/**
 * User: Script
 * Date: 28.10.2018
 * Time: 18:48
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbOnOff;


class TurnOff implements Command
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }
}