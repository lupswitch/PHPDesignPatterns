<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 24.10.2018
 * Time: 17:49
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbControl;


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