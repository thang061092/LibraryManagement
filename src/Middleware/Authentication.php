<?php


namespace App\Middleware;


class Authentication
{
    function isLogin(){
       if (!isset($_SESSION['isLogin']) || !$_SESSION['isLogin']) {
           header("location:src/View/logIn/login.php");
       }
    }
}