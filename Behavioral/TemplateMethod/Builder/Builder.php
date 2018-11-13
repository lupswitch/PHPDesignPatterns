<?php
/**
 * User: Script
 * Date: 13.11.2018
 * Time: 5:57
 */

namespace PHPDesignPatterns\Behavioral\TemplateMethod\Builder;

abstract class Builder
{
    private $buildResult = [];

    // Шаблонный метод
    final public function build()
    {
        $this->buildResult[] = $this->test();
        $this->buildResult[] = $this->lint();
        $this->buildResult[] = $this->assemble();
        $this->buildResult[] = $this->deploy();
    }

    public function getBuildResult()
    {
        return $this->buildResult;
    }

    abstract public function test();
    abstract public function lint();
    abstract public function assemble();
    abstract public function deploy();
}