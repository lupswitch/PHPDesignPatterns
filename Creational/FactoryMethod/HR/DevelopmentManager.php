<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:17
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\HR;


class DevelopmentManager extends HiringManager
{

    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}