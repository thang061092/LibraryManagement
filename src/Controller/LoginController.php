<?php

namespace App\Controller;

use App\Model\UserDB;

class LoginController
{
    protected $userDB;

    public function __construct()
    {
        $this->userDB = new UserDB();
    }

    public function login($email,$pass)
    {
        $result =  $this->userDB->getUser($email,$pass);
        if (is_array($result)) {
            $_SESSION['isLogin'] = true;
            $_SESSION['userLogin'] = $result;
            header('location: ../../../index.php');
        } else {
            header('location:login.php');
        }
    }

    public function logout()
    {
        session_destroy();
        header('location:login.php');
    }
}