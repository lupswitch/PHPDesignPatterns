<?php
namespace PHPDesignPatterns\Creational\Factory;


class FirstFactory implements Factory
{
  public function getItem ()
  {
    return new FirstItem();
  }
}