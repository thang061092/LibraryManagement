<?php

namespace App\Controller;


class LibraryController
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new \App\Model\LibraryDB();
    }

    public function viewCategory()
    {
        $categorys = $this->connect->getCategory();
        include "src/View/ViewCategory/list.php";
    }

}