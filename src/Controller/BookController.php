<?php


namespace App\Controller;


use App\Model\LibraryDB;

class BookController
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new LibraryDB();
    }

    public function viewBook()
    {
        $books=$this->connect->getBook();
        include "src/View/books/list.php";
    }
}