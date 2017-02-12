<?php
namespace PHPDesignPatterns\Behavioral\Iterator;

/**
 * Class Iteratable
 * @package PHPDesignPatterns\Behavioral\Iterator
 */
class Iteratable implements \Iterator
{

    /**
     * Current possition
     * @var int
     */
    protected $position = 0;


    /**
     * Default values
     * @var array
     */
    protected $data = [
        'Item1',
        'Item2',
        'Item3',
    ];


    /**
     * Iteratable constructor.
     */
    public function __construct()
    {
        $this->position = 0;

    }


    /**
     *
     */
    public function rewind()
    {
        $this->position = 0;
    }

    public function current()
    {
        return $this->data[$this->position];
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        ++$this->position;
    }


    /**
     * @return bool             
     */
    public function valid()
    {
        return isset($this->data[$this->position]);
    }
}