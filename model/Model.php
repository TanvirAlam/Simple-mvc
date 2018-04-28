<?php
/*
 * This is where all the database interaction within model
 */
include_once("model/Book.php");
include("config/database.php");

class Model {

    /**
     * @var database
     */
    private $con;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->con = new database();
    }

    /**
     * @return Array
     */
    public function getBookList()
    {
        return $this->getData();
    }

    /**
     * @param $title
     * @return mixed
     */
    public function getBook($title)
    {
        $allBooks = $this->getBookList();
        return $allBooks[$title];
    }

    /**
     * Save a book title
     *
     * @param $title
     * @return mixed
     */
    public function saveBook($title)
    {
        $insert = $this->con->pdo->prepare("INSERT INTO books (title) VALUES (:title)");
        return $insert->execute([':title' => $title]);
    }

    /**
     * This is get all data
     *
     * @return mixed
     */
    public function getData()
    {
        $stmt  = $this->con->pdo->prepare("SELECT id, title FROM books"); // Prevent MySQl injection. $stmt means statement
        $stmt->execute();
        return $stmt;
    }

    /**
     * This is for deleting data
     *
     * @param $bookId
     * @return mixed
     */
    public function deleteBook($bookId)
    {
        $deleteBook = $this->con->pdo->prepare("DELETE FROM books WHERE id = :id");
        return $deleteBook->execute([':id' => $bookId]);
    }
}
