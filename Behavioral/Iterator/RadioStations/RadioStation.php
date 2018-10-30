<?php
/**
 * User: Script
 * Date: 30.10.2018
 * Time: 5:57
 */

namespace PHPDesignPatterns\Behavioral\Iterator\RadioStations;


class RadioStation
{
    protected $frequency;

    public function __construct(float $frequency)
    {
        $this->frequency = $frequency;
    }

    public function getFrequency(): float
    {
        return $this->frequency;
    }
}