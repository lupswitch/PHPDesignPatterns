<?php
/**
 * User: Script
 * Date: 20.10.2018
 * Time: 7:13
 */

namespace PHPDesignPatterns\Structural\Flyweight\TeaShop\Tests;

use PHPDesignPatterns\Structural\Flyweight\TeaShop\TeaMaker;
use PHPDesignPatterns\Structural\Flyweight\TeaShop\TeaShop;
use PHPUnit\Framework\TestCase;

class TeaShopTest extends TestCase
{
    public function testMain()
    {
        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('less sugar', 1);
        $shop->takeOrder('more milk', 2);
        $shop->takeOrder('without sugar', 5);
        $result = $shop->serve();

        $expectedResultText = <<<EOL
Serving tea to table# 1
Serving tea to table# 2
Serving tea to table# 5

EOL;

        $this->assertEquals($expectedResultText, $result);
    }
}