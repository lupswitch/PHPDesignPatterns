<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 24.10.2018
 * Time: 17:50
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbControl;


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