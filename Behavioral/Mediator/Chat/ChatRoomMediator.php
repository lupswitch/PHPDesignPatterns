<?php
/**
 * User: Script
 * Date: 31.10.2018
 * Time: 6:06
 */

namespace PHPDesignPatterns\Behavioral\Mediator\Chat;


interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}