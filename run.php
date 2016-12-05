<?php

include_once 'vendor/autoload.php';

$iteratable = new \PHPDesignPatterns\Behavioral\Iterator\Iteratable();
foreach ($iteratable as $item) {
  var_dump($iteratable->key(), $item);
}