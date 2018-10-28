<?php
/**
 * User: Script
 * Date: 28.10.2018
 * Time: 18:49
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbOnOff;


class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}