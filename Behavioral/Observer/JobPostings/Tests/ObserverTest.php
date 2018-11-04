<?php
/**
 * User: Script
 * Date: 04.11.2018
 * Time: 5:51
 */

namespace PHPDesignPatterns\Behavioral\Observer\JobPostings\Tests;


use PHPDesignPatterns\Behavioral\Observer\JobPostings\JobPost;
use PHPDesignPatterns\Behavioral\Observer\JobPostings\JobPostings;
use PHPDesignPatterns\Behavioral\Observer\JobPostings\JobSeeker;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testMain()
    {
        // Create subscribers
        $johnDoe = new JobSeeker('John Doe');
        $janeDoe = new JobSeeker('Jane Doe');

        // Создаём публикатора и прикрепляем подписчиков
        $jobPostings = new JobPostings();
        $jobPostings->attach($johnDoe);
        $jobPostings->attach($janeDoe);

        // Add new job
        ob_start();
        $jobPostings->addJob(new JobPost('Software Engineer'));
         $result = ob_get_clean();

        // Output
        // Hi John Doe! New job posted: Software Engineer
        // Hi Jane Doe! New job posted: Software Engineer
        $this->assertEquals('Hi John Doe! New job posted: Software Engineer Hi Jane Doe! New job posted: Software Engineer ', $result);


    }
}