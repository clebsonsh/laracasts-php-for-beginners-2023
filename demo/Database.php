<?php

class Database
{
    public $connection;
    public $statement;

    public function __construct($config)
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, options: [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    }
    public function query($query, $parms = [])
    {

        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($parms);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result) {
            abort(Response::NOT_FOUND);
        }

        return $result;
    }
}
