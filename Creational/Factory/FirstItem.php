<?php
namespace PHPDesignPatterns\Creational\Factory;


class FirstItem implements Item
{
  public function getItemName()
  {
    return 'First item'.PHP_EOL;
  }
}