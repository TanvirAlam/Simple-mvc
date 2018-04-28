<?php

/**
 * This is used for connection to mysql
 *
 * Class database
 */
class database
{
    public $connection;
    public $pdo;

    public function __construct()
    {
        $this->connection = $this->connect_to_db();
    }

    public function connect_to_db()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=mysql;dbname=mvc', 'root', 'root');
        }
        catch (PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();
            exit();
        }
    }
}
