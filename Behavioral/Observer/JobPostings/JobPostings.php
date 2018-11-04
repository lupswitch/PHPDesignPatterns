<?php
/**
 * User: Script
 * Date: 04.11.2018
 * Time: 5:54
 */

namespace PHPDesignPatterns\Behavioral\Observer\JobPostings;


class JobPostings implements Observable
{
    protected $observers = [];

    protected function notify(JobPost $jobPosting)
    {
        foreach ($this->observers as $observer) {
            $observer->onJobPosted($jobPosting);
        }
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function addJob(JobPost $jobPosting)
    {
        $this->notify($jobPosting);
    }
}