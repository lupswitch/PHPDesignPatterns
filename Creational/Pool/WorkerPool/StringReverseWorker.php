<?php
/**
 * User: Script
 * Date: 20.12.2017
 * Time: 5:38
 */

namespace PHPDesignPatterns\Creational\Pool\WorkerPool;


class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }
    public function run(string $text)
    {
        return strrev($text);
    }
}