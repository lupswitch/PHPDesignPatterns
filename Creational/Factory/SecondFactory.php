<?php
/**
 * Created by PhpStorm.
 * User: Script
 * Date: 12.02.2017
 * Time: 16:41
 */

namespace PHPDesignPatterns\Creational\Factory;


class SecondFactory implements  Factory
{
  public function getItem()
  {
    return new SecondItem();
  }
}