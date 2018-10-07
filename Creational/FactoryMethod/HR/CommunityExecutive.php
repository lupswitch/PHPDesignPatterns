<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:11
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\HR;


class CommunityExecutive implements Interviewer
{

    public function askQuestions(): string
    {
        return 'Asking about community building';
    }
}