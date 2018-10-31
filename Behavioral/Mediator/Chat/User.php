<?php
/**
 * User: Script
 * Date: 31.10.2018
 * Time: 6:11
 */

namespace PHPDesignPatterns\Behavioral\Mediator\Chat;


class User
{
    protected $name;
    protected $chatMediator;

    public function __construct(string $name, ChatRoomMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName() {
        return $this->name;
    }

    public function send($message) {
        $this->chatMediator->showMessage($this, $message);
    }
}