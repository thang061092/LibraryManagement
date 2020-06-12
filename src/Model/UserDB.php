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
}