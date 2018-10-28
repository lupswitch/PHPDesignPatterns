<?php
/**
 * User: Script
 * Date: 28.10.2018
 * Time: 18:47
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbOnOff;


interface Command
{
    public function execute();
    public function undo();
    public function redo();
}