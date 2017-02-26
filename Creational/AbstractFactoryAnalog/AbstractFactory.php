<?php
namespace PHPDesignPatterns\Creational\AbstractFactoryAnalog;



abstract  class AbstractFactory
{
  public function getFactory ()
  {
    switch (Config::$factory) {
      case 1:
        return new FirstFactory();
      case 2:
        return new SecondFactory();
    }
    throw new Exception('Bad config');
  }
}