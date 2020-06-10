<?php


namespace App\Controller;


use App\Model\Book;
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
        $books = $this->connect->getBook();
        include "src/View/books/list.php";
    }

    public function addBook()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/books/add.php";
        } else {
            $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $author = $_REQUEST["author"];
            $publisher = $_REQUEST["publisher"];
            $publishYear=$_REQUEST["publishYear"];
            $price=$_REQUEST["price"];
            $idCategory=$_REQUEST["idCategory"];
            $book= new Book($id,$name,$author,$publisher,$publishYear,$price,$idCategory);
            $this->connect->addBook($book);
            header("location:index.php?page=view-book");
        }
    }
}