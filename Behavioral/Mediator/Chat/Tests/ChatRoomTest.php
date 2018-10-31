<?php
/**
 * User: Script
 * Date: 31.10.2018
 * Time: 6:19
 */

namespace PHPDesignPatterns\Behavioral\Mediator\Chat\Tests;


use PHPDesignPatterns\Behavioral\Mediator\Chat\ChatRoom;
use PHPDesignPatterns\Behavioral\Mediator\Chat\User;
use PHPUnit\Framework\TestCase;

class ChatRoomTest extends TestCase
{
    public function testMain()
    {
        $mediator = new ChatRoom();

        $john = new User('John Doe', $mediator);
        $jane = new User('Jane Doe', $mediator);

        ob_start();
        $john->send('Hi there!');
        $jane->send('Hey!');
        $result = ob_get_clean();

        $this->assertEquals(true, (strpos($result, 'Hey') && strpos($result, 'Hi there!')));
    }
}