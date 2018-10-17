<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 20:14
 */

namespace PHPDesignPatterns\Structural\Bridge\TextFormatters\Tests;


use PHPDesignPatterns\Structural\Bridge\Formatters\HtmlFormatter;
use PHPDesignPatterns\Structural\Bridge\Formatters\JsonFormatter;
use PHPDesignPatterns\Structural\Bridge\Formatters\PlainTextFormatter;
use PHPDesignPatterns\Structural\Bridge\HelloWorldService;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package PHPDesignPatterns\Structural\Bridge\Tests
 */
class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
        echo __METHOD__.PHP_EOL;
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertEquals('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlTextPrinter()
    {
        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertEquals('<p>Hello World</p>', $service->get());
    }

    public function testCanPrintUsingTheJsonTextPrinter()
    {
        $service = new HelloWorldService(new JsonFormatter());
        $this->assertEquals('"Hello World"', $service->get());
    }
}