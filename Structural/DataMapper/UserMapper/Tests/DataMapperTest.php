<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 9:35
 */

namespace PHPDesignPatterns\Structural\DataMapper\UserMapper\Tests;


use PHPDesignPatterns\Structural\DataMapper\UserMapper\StorageAdapter;
use PHPDesignPatterns\Structural\DataMapper\UserMapper\User;
use PHPDesignPatterns\Structural\DataMapper\UserMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testWillNotMapInvalidData()
    {
        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}