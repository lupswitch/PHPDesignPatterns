<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 24.10.2018
 * Time: 17:51
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbControl;


class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}