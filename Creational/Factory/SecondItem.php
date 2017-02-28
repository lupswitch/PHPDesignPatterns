<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 12.02.2017
 * Time: 16:38
 */

namespace PHPDesignPatterns\Creational\Factory;


class SecondItem implements Item
{
  public function getItemName()
  {
    return 'Second item'.PHP_EOL;
  }
}