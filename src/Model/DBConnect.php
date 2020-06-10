<?php

namespace App\Model;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=LibraryManagement';
        $this->username = 'root';
        $this->password = 'Nguyen@123';
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn, $this->username, $this->password);

        }catch (\PDOException $exception){
            echo $exception->getMessage();
            exit();
        }
    }
}