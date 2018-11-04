<?php
/**
 * User: Script
 * Date: 04.11.2018
 * Time: 5:50
 */

namespace PHPDesignPatterns\Behavioral\Observer\JobPostings;


class JobPost
{
    protected $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}