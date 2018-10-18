<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 10:13
 */

namespace PHPDesignPatterns\Structural\Composite\OrganizationEmployee;


class Developer extends Employee
{

    public function getRoles(): array
    {
        return  [
            'develop',
            'testing'
        ];
    }

}