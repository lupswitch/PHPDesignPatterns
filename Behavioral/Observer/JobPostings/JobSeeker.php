<?php
/**
 * User: Script
 * Date: 04.11.2018
 * Time: 5:54
 */

namespace PHPDesignPatterns\Behavioral\Observer\JobPostings;


class JobSeeker implements Observer
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        // Do something with the job posting
        echo 'Hi ' . $this->name . '! New job posted: '. $job->getTitle().' ';
    }
}