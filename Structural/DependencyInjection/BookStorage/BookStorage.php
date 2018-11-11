<?php
/**
 * User: Script
 * Date: 11.11.2018
 * Time: 6:45
 */

namespace PHPDesignPatterns\Structural\DependencyInjection\BookStorage;


class BookStorage
{
    private $db;

    public function __construct(DatabaseConnect $db)
    {
        $this->db = $db;
    }

    public function store(Book $book)
    {
        return $this->db->insert('books', [
            'author' => $book->author,
            'title'  => $book->title
        ]);
    }
}