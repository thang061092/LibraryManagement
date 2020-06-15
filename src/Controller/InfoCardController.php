<?php


namespace App\Controller;


use App\Model\LibraryDB;

class InfoCardController
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new LibraryDB();
    }

    public function viewListOrder()
    {
        $orders = $this->connect->infoOrder();
        include "src/View/generality/show-order.php";
    }

    public function showInfoOrder($id)
    {
        $order = $this->connect->infoOrderById($id);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $option = $_POST["option"];
            $this->connect->updateStatus($id, $option);
            $order = $this->connect->infoOrderById($id);
        }
        include "src/View/generality/detail-order.php";
    }

    public function orderBook()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST["id"];
            $order = $this->connect->infoOrderById($id);
            $books = $this->connect->getBook();
            include "src/View/generality/detail-book.php";
        } else {
            $id = $_REQUEST["id"];
            $card = $_REQUEST["order"];
            $book = $_REQUEST["book"];
            $this->connect->detailBook($card, $book);
            header("location:index.php?page=detail-order&id=$id");
        }

    }

    public function order()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $borrowOrders = $this->connect->getBorrowOrder();
            $books = $this->connect->getBook();
            include "src/View/generality/order-book.php";
        } else {
            $card = $_REQUEST["order"];
            $book = $_REQUEST["book"];
            $this->connect->detailBook($card, $book);
            header("location:index.php?page=show-order");
        }
    }

    public function deleteOrder($idc, $idb)
    {
        $this->connect->deleteOrder($idc, $idb);
        header("location:index.php?page=detail-order&id=$idc");

    }
}