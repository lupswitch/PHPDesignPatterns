<?php
/**
 * User: Script
 * Date: 03.09.2017
 * Time: 17:47
 */
namespace PHPDesignPatterns\Creational\Prototype\Book;

/**
 * Class BookPrototype
 * @package DesignPatterns\Creational\Prototype
 */
abstract class BookPrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $category;


    /**
     * Set title
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    /**
     * Get title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Set author book
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }


    /**
     * Get author
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * @return mixed
     */
    abstract public function __clone();
}