<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:17
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\HR;


abstract  class HiringManager
{
    /**
     * Fabric method 
     * @return Interviewer
     */
    abstract public function makeInterviewer(): Interviewer;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        return $interviewer->askQuestions();
    }
}