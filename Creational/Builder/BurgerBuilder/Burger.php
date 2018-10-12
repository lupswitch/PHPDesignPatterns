<?php
/**
 * User: Script
 * Date: 12.10.2018
 * Time: 5:41
 */

namespace PHPDesignPatterns\Creational\Builder\BurgerBuilder;


class Burger
{
    /**
     * @var int
     */
    protected $size;

    /**
     * @var bool
     */
    protected $cheese = false;

    /**
     * @var bool
     */
    protected $pepperoni = false;

    /**
     * @var bool
     */
    protected $lettuce = false;

    /**
     * @var bool
     */
    protected $tomato = false;

    /**
     * Burger constructor.
     * @param BurgerBuilder $builder
     */
    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return bool
     */
    public function getCheese()
    {
        return $this->cheese;
    }

    /**
     * @return bool
     */
    public function getPepperoni()
    {
        return $this->pepperoni;
    }

    /**
     * @return bool
     */
    public function getLettuce()
    {
        return $this->lettuce;
    }

    /**
     * @return bool
     */
    public function getTomato()
    {
        return $this->tomato;
    }
}