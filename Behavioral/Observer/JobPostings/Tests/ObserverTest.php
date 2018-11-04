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
        // Создаём подписчиков
        $johnDoe = new JobSeeker('John Doe');
        $janeDoe = new JobSeeker('Jane Doe');

// Создаём публикатора и прикрепляем подписчиков
        $jobPostings = new JobPostings();
        $jobPostings->attach($johnDoe);
        $jobPostings->attach($janeDoe);

// Добавляем новую вакансию и смотрим, будут ли уведомлены подписчики
        $jobPostings->addJob(new JobPost('Software Engineer'));

// Output
// Hi John Doe! New job posted: Software Engineer
// Hi Jane Doe! New job posted: Software Engineer
    }
}