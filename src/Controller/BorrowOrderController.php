<?php


namespace App\Controller;
use App\Model\LibraryDB;
use App\Model\BorrowOrder;

class BorrowOrderController
{
    protected $connect;
    public function __construct()
    {
        $this->connect = new LibraryDB();
    }

    public function viewBorrowOrder()
    {
        $borrowOrders = $this->connect->getBorrowOrder();
        include "src/View/borrowOrder/list.php";
    }

    public function addBorrowOrder()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $students = $this->connect->getStudent();
            include "src/View/borrowOrder/add.php";

        } else {
            $card = $_POST['card'];
            $borrowDate = $_POST['borrowdate'];
            $returnDate = $_POST['returndate'];
            $status = $_POST['status'];
            $comment = $_POST['comment'];
            $id = $_POST['idStudent'];
            $borrowOrder = new BorrowOrder($card, $borrowDate, $returnDate, $status, $comment, $id);
            $this->connect->addBorrowOrder($borrowOrder);
            header("Location:index.php?page=view-borrow-order");
        }
    }
}