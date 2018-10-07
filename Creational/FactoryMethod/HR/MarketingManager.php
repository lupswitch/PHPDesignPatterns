<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:18
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\HR;


class MarketingManager extends HiringManager
{

    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}