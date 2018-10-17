<?php
/**
 * User: Script
 * Date: 26.11.2017
 * Time: 20:14
 */

namespace PHPDesignPatterns\Structural\Bridge\TextFormatters\Tests;


use PHPDesignPatterns\Structural\Bridge\TextFormatters\Formatters\HtmlFormatter;
use PHPDesignPatterns\Structural\Bridge\TextFormatters\Formatters\JsonFormatter;
use PHPDesignPatterns\Structural\Bridge\TextFormatters\Formatters\PlainTextFormatter;
use PHPDesignPatterns\Structural\Bridge\TextFormatters\HelloWorldService;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgeTest
 * @package PHPDesignPatterns\Structural\Bridge\Tests
 */
class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextPrinter()
    {
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