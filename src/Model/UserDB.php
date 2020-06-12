<?php


namespace App\Model;


class UserDB
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getUser($email,$pass) {
        $sql = "SELECT * FROM users WHERE email= :email AND password= :password";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $pass);
        $stmt->execute();
        $item = $stmt->fetch();
        return $item;
    }

    public function add($name,$email,$phone,$pass){
        $sql= "INSERT INTO `users`(userName, `email`, `phone`, `password`) VALUES (?, ?, ?, ?)";
        $stmt= $this->database->prepare($sql);
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$email);
        $stmt->bindParam(3,$phone);
        $stmt->bindParam(4,$pass);
        $stmt->execute();

    }
}