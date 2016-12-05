<?php

namespace PHPDesignPatterns\Behavioral\Iterator;


class Iteratable  implements   \Iterator
{

  protected  $position = 0;

  protected  $data = [
    'Item1',
    'Item2',
    'Item3',
  ];

  public  function  __construct()
  {
    $this->position = 0;

  }

  public function rewind ()
  {
    $this->position = 0;
  }

  public function current()
  {
    return $this->data[$this->position];
  }

  public function  key ()
  {
    return $this->position;
  }

  public function next ()
  {
    ++$this->position;
  }

  public function valid ()
  {
    return isset($this->data[$this->position]);
  }
}