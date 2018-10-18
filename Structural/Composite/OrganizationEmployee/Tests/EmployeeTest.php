<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 10:16
 */

namespace PHPDesignPatterns\Structural\Composite\OrganizationEmployee;

use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    public function testEmplees()
    {
        $john = new Developer('John Doe', 12000);
        $jane = new Designer('Jane Doe', 15000);

        $organization = new Organization();
        $organization->addEmployee($john);
        $organization->addEmployee($jane);

        $this->assertEquals(27000, $organization->getNetSalaries());
    }
}