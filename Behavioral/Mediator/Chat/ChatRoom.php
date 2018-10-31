<?php
/**
 * User: Script
 * Date: 31.10.2018
 * Time: 6:11
 */

namespace PHPDesignPatterns\Behavioral\Mediator\Chat;


class ChatRoom  implements ChatRoomMediator
{
    public function showMessage(User $user, string $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message;
    }
}