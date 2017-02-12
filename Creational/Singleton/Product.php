<?php
namespace PHPDesignPatterns\Creational\Singleton;

/**
 * Singelton example
 * @package PHPDesignPatterns\Creational\Singleton
 */
class Product
{
  /**
   * @var Product | null
   */
  private static  $instance;

  /**
   * Example varibale
   * @var
   */
  public $var;


  /**
   * Product constructor is disabled
   */
  private function __construct () {}


  /**
   * Get instance
   * @return null|Product
   */
  public static function  getInstance ()
  {
    if (!(self::$instance instanceof self)) {
      self::$instance = new self();
    }
    return self::$instance;
  }


  /**
   * Serialize disabled
   */
  public function __sleep() {}


  /**
   * Unserialize disabled
   */
  public function __wakeup() {}


  /**
   * Disabled clone
   */
  private function __clone() {}
}