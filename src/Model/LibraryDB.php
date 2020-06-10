<?php


namespace App\Model;


class LibraryDB
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getCategory()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $category = new Category($item["id"], $item["categoryName"], $item["description"]);
            array_push($arr, $category);
        }
        return $arr;
    }

    public function getIdCategory($id)
    {
        $sql = "SELECT * FROM category WHERE id= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $item = $stmt->fetch();
        $category = new Category($item["id"], $item["categoryName"], $item["description"]);
        return $category;
    }

    public function updateCategory($category)
    {
        $sql = "UPDATE `category` SET `categoryName`= :categoryName,`description`= :description WHERE `id`= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $category->getId());
        $stmt->bindParam(":categoryName", $category->getCategoryName());
        $stmt->bindParam(":description", $category->getDescription());
        $stmt->execute();
    }

    public function addCategory($category)
    {
        $sql = "INSERT INTO `category`(`id`, `categoryName`, `description`) VALUES (:id, :categoryName ,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $category->getId());
        $stmt->bindParam(":categoryName", $category->getCategoryName());
        $stmt->bindParam(":description", $category->getDescription());
        $stmt->execute();
    }

    public function getBook()
    {
        $sql = "SELECT * FROM books";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $book = new Book($item["idBook"], $item["bookName"], $item['author'], $item['publisher'], $item['publishYear'], $item['price'], $item['idCategory']);
            array_push($arr, $book);
        }
        return $arr;
    }

    public function addBook($book)
    {
        $sql = "INSERT INTO `books`(idBook,`bookName`, `author`, `publisher`, `publishYear`, `price`, `idCategory`) VALUES (?,?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(2, $book->getBookName());
        $stmt->bindParam(4, $book->getPublisher());
        $stmt->bindParam(5, $book->getPublishYear());
        $stmt->bindParam(3, $book->getAuthor());
        $stmt->bindParam(6, $book->getPrice());
        $stmt->bindParam(7, $book->getIdCategory());
        $stmt->bindParam(1, $book->getIdBook());
        $stmt->execute();
    }

    public function getStudent()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->database->prepare($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $item) {
            $student = new Student($item['id'], $item['studentName'], $item['gender'], $item['address'], $item['email'], $item['phone']);
            array_push($array, $student);
        }
        return $array;
    }

    public function addStudent($student)
    {
        $sql = "INSERT INTO `students`(`id`, `studentName`, `gender`, `address`, `email`, `phone`) VALUES (:id, :studentName, :gender, :address, :email, :phone)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $student->getId());
        $stmt->bindParam(":studentName", $student->getStudentName());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->bindParam(":address", $student->getEmail());
        $stmt->bindParam(":email", $student->getEmail());
        $stmt->bindParam(":phone", $student->getPhone());
        $stmt->execute();
    }
}