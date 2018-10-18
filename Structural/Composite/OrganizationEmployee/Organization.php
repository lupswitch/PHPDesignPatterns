<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 10:15
 */

namespace PHPDesignPatterns\Structural\Composite\OrganizationEmployee;


class Organization
{
    protected $employees;

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries(): float
    {
        $netSalary = 0;

        foreach ($this->employees as $employee) {
            $netSalary += $employee->getSalary();
        }

        return $netSalary;
    }
}