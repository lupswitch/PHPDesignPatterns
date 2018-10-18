<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 10:12
 */

namespace PHPDesignPatterns\Structural\Composite\OrganizationEmployee;


abstract class Employee implements EmployeeInterface
{
    protected $salary;
    protected $name;


    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    abstract public function getRoles(): array;
}