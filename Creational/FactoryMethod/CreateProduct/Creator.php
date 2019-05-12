<?php
/**
 * Created by PhpStorm.
 * User: chastener
 * Date: 02.05.2019
 * Time: 11:38
 */

namespace PHPDesignPatterns\Creational\FactoryMethod\CreateProduct;


abstract class Creator
{
    /**
     * Main factory method
     * @return Product
     */
    abstract public function factoryMethod(): Product;

    public function someOperation(): string
    {
        // Call the factory method to create a Product object.
        $product = $this->factoryMethod();
        // Now, use the product.
        $result = "Creator: The same creator's code has just worked with " .
            $product->operation();

        return $result;
    }
}