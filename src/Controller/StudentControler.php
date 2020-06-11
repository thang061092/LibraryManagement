<?php


namespace App\Controller;

use App\Model\Student;
use App\Model\LibraryDB;


class StudentControler
{
    protected $connect;

    public function __construct()
    {
        $this->connect = new LibraryDB();
    }

    public function viewStudent()
    {
        $students = $this->connect->getStudent();
        include "src/View/students/list.php";
    }

    public function addStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/students/add.php";
        } else {
            $id = $_POST['id'];
            $studentName = $_POST['studentName'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $student = new Student($id, $studentName, $gender, $address, $email, $phone,);
            $this->connect->addStudent($student);
            header("Location:index.php?page=view-student");
        }
    }
}