<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 24.10.2018
 * Time: 17:48
 */

namespace PHPDesignPatterns\Behavioral\Command\BulbControl;


interface Command
{
    public function execute();
    public function undo();
    public function redo();
}