<?php
/**
 * User: Script
 * Date: 12.10.2018
 * Time: 5:47
 */

namespace PHPDesignPatterns\Creational\Builder\BurgerBuilder;


class BurgerBuilder
{
    /**
     * @var int
     */
    public $size;

    /**
     * @var bool
     */
    public $cheese = false;

    /**
     * @var bool
     */
    public $pepperoni = false;

    /**
     * @var bool
     */
    public $lettuce = false;

    /**
     * @var bool
     */
    public $tomato = false;

    /**
     * BurgerBuilder constructor.
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return $this
     */
    public function addPepperoni()
    {
        $this->pepperoni = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addLettuce()
    {
        $this->lettuce = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    /**
     * @return Burger
     */
    public function build(): Burger
    {
        return new Burger($this);
    }
}