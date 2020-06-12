<?php


namespace App\Controller;

use App\Model\Student;
use App\Model\LibraryDB;


class StudentControler
{
    protected $libraryDB;

    public function __construct()
    {
        $this->libraryDB = new LibraryDB();
    }

    public function viewStudent()
    {
        $students = $this->libraryDB->getStudent();
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
            $student = new Student($id, $studentName, $gender, $address, $email, $phone);
            $this->libraryDB->addStudent($student);
            header("Location:index.php?page=view-student");
        }
    }

    public function updateStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $student = $this->libraryDB->getIdStudent($id);
            include "src/View/students/update.php";
        } else {
            $id = $_POST['id'];
            $studentName = $_POST['studentName'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $student = new Student($id, $studentName, $gender, $address, $email, $phone);
            $this->libraryDB->updateStudent($student);
            header("Location:index.php?page=view-student");
        }
    }

    public function searchStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/View/students/search.php";
        } else {
            $search = $_REQUEST["search"];
            $students = $this->libraryDB->searchStudent($search);
            include "src/View/students/search.php";
        }
    }
}