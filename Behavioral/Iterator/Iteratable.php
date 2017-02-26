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
     * resset position
     */
    public function rewind()
    {
        $this->position = 0;
    }


    /**
     * Get current value
     * @return mixed
     */
    public function current()
    {
        return $this->data[$this->position];
    }


    /**
     * Get current key
     * @return int
     */
    public function key()
    {
        return $this->position;
    }


    /**
     * Next positon
     */
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