<?php

namespace App\Controller;


use App\Model\Categoty;

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

    public function updateCategory()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $category = $this->connect->getIdCategory($id);
            include "src/View/ViewCategory/update.php";
        } else {
            $id = $_REQUEST["id"];
            $cate = $_REQUEST["category"];
            $desc= $_REQUEST["description"];
            $category= new Categoty($id,$cate,$desc);
            $this->connect->updateCategory($category);
            header("Location:index.php?page=view-category");
        }
    }

}