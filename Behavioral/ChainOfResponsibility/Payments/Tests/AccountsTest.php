<?php
/**
 * User: Script
 * Date: 23.10.2018
 * Time: 5:28
 */

namespace PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Tests;

use PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Bank;
use PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Bitcoin;
use PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Paypal;
use PHPUnit\Framework\TestCase;

class AccountsTest extends TestCase
{
    const EXPECTED_RESULT = <<<EOL
Cannot pay using PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Bank. Proceeding ..
Cannot pay using PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Paypal. Proceeding ..
Paid 259 using PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Bitcoin

EOL;

    public function testMain()
    {
        // set balance for accounts
        $bank = new Bank(100);
        $paypal = new Paypal(200);
        $bitcoin = new Bitcoin(300);


        // set steps
        $bank->setNext($paypal);
        $paypal->setNext($bitcoin);


        //
        ob_start();
        $bank->pay(259);
        $result = ob_get_clean();


        //var_dump(self::EXPECTED_RESULT); exit;
        $this->assertEquals($this->getExpectedResultString(), $result);
    }

    private function getExpectedResultString()
    {
        return self::EXPECTED_RESULT;
        
        return 'Cannot pay using PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Bank. Proceeding ..'.PHP_EOL.
           'Cannot pay using PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Paypal. Proceeding ..'.PHP_EOL.
            'Paid 259 using PHPDesignPatterns\Behavioral\ChainOfResponsibility\Payments\Bitcoin'.PHP_EOL;
    }
}