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
            $categorys = $this->connect->getCategory();
            include "src/View/books/add.php";
        } else {
            $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $author = $_REQUEST["author"];
            $publisher = $_REQUEST["publisher"];
            $publishYear = $_REQUEST["publishYear"];
            $price = $_REQUEST["price"];
            $idCategory = $_REQUEST["idCate"];
            $book = new Book($id, $name, $author, $publisher, $publishYear, $price, $idCategory);
            $this->connect->addBook($book);
            header("location:index.php?page=view-book");
        }
    }

    public function updateBook()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $book = $this->connect->getIdBook($id);
            include "src/View/books/update.php";
        } else {
            $idBook = $_REQUEST["id"];
            $nameBook = $_REQUEST["nameBook"];
            $author = $_REQUEST["author"];
            $publisher = $_REQUEST["publisher"];
            $publishYear = $_REQUEST["publishYear"];
            $price = $_REQUEST["price"];
            $this->connect->updateBook($nameBook, $author, $publisher, $publishYear, $price, $idBook);
            header("location:index.php?page=view-book");
        }
    }

    public function searchBook()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/books/search.php";
        } else {
            $search = $_REQUEST["search"];
            $books = $this->connect->searchBook($search);
            include "src/View/books/search.php";
        }
    }


}