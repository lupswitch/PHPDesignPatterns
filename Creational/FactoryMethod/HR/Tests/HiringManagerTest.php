<?php
/**
 * User: Script
 * Date: 07.10.2018
 * Time: 8:21
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\HR\Tests;


use PHPDesignPatterns\Creational\FactoryMethod\HR\DevelopmentManager;
use PHPDesignPatterns\Creational\FactoryMethod\HR\MarketingManager;

class HiringManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testDeveloperManager()
    {
        $manager = new DevelopmentManager();
        $this->assertInstanceOf('PHPDesignPatterns\Creational\FactoryMethod\HR\DevelopmentManager', $manager);

        $this->assertEquals('Asking about design patterns!', $manager->takeInterview()  );
    }

    public function testMarketingManager()
    {
        $manager = new MarketingManager();
        $this->assertInstanceOf('PHPDesignPatterns\Creational\FactoryMethod\HR\MarketingManager', $manager);

        $this->assertEquals('Asking about community building', $manager->takeInterview()  );
    }
}