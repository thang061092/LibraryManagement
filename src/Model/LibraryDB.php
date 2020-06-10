<?php


namespace App\Model;


class LibraryDB
{
    protected $database;

    public function __construct()
    {
        $db= new DBConnect();
        $this->database= $db->connect();
    }


}