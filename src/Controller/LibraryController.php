<?php

namespace App\Controller;


class LibraryController
{
    protected $connect;

    public function __construct()
    {
        $this->connect= new \App\Model\LibraryDB();
    }


}