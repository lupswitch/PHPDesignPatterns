<?php
require_once  'vendor/autoload.php';

use PHPDesignPatterns\Creational\Singleton\Product;

$firstProduct = Product::getInstance();
$secondProduct = Product::getInstance();

$firstProduct->var = 1;
$secondProduct->var = 2;

print_r($firstProduct->var);
// 2
print_r($secondProduct->var);
// 2