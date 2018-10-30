<?php
/**
 * User: Script
 * Date: 30.10.2018
 * Time: 5:58
 */

namespace PHPDesignPatterns\Behavioral\Iterator\RadioStations\Tests;


use PHPDesignPatterns\Behavioral\Iterator\RadioStations\RadioStation;
use PHPDesignPatterns\Behavioral\Iterator\RadioStations\StationList;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    public function testRun()
    {
        $stationList = new StationList();

        $stationList->addStation(new RadioStation(89));
        $stationList->addStation(new RadioStation(101));
        $stationList->addStation(new RadioStation(102));
        $stationList->addStation(new RadioStation(103.2));

        foreach($stationList as $station) {
            $this->assertInstanceOf(RadioStation::class, $station);
            $this->assertEquals(true, in_array($station->getFrequency(), [89, 101, 102, 103.2]));
        }

        $stationList->removeStation(new RadioStation(89)); // Will remove station 89

        foreach($stationList as $station) {
            $this->assertInstanceOf(RadioStation::class, $station);
            $this->assertEquals(true, in_array($station->getFrequency(), [101, 102, 103.2]));
        }

    }
}