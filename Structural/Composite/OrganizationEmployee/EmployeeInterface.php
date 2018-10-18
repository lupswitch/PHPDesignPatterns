<?php
/**
 * User: Script
 * Date: 17.10.2018
 * Time: 10:10
 */

namespace PHPDesignPatterns\Structural\Composite\OrganizationEmployee;


interface EmployeeInterface
{
    public function __construct(string $name, float $salary);
    public function getName(): string;
    public function setSalary(float $salary);
    public function getSalary(): float;
    public function getRoles(): array;
}