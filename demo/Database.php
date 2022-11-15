<?php

// connect to the database, and execute a query.
class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=laracast;charset=utf8mb4";
        $user = 'laracast';
        $password = 'password';

        $this->connection = new PDO($dsn, $user, $password);
    }
    public function query($query)
    {

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
