<?php
namespace PHPDesignPatterns\Creational\AbstractFactory\TextConverter;

/**
 * Class Text
 * @package PHPDesignPatterns\Creational\AbstractFactory
 */
abstract class Text
{
    /**
     * @var string
     */
    private $text;


    /**
     * Text constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
