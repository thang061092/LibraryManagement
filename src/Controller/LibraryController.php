<?php

namespace App\Controller;


use App\Model\Category;

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
        include "src/View/categories/list.php";
    }

    public function updateCategory()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $category = $this->connect->getIdCategory($id);
            include "src/View/categories/update.php";
        } else {
            $id = $_REQUEST["id"];
            $cate = $_REQUEST["category"];
            $desc = $_REQUEST["description"];
            $category = new Category($id, $cate, $desc);
            $this->connect->updateCategory($category);
            header("Location:index.php?page=view-category");
        }
    }

    public function addCategory()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/categories/add.php";
        } else {
            $id = $_REQUEST["id"];
            $cate = $_REQUEST["cate"];
            $desc = $_REQUEST["desc"];
            $category = new Category($id, $cate, $desc);
            $this->connect->addCategory($category);
            header("Location:index.php?page=view-category");
        }
    }

    public function searchCategory()
    {
        if($_SERVER["REQUEST_METHOD"] == "GET") {

        }
    }

}