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
        $order= $this->connect->infoOrderById($id);
        include "src/View/generality/detail-order.php";
    }
}