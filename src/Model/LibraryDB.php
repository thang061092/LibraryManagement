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
        $sql = "INSERT INTO books(idBook, bookName, author, publisher, publishYear, price, idCategory) VALUES ( :id, :bookName, :author, :publisher, :publishYear, :price, :idCate)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $book->getIdBook());
        $stmt->bindParam(":bookName", $book->getBookName());
        $stmt->bindParam(":author", $book->getAuthor());
        $stmt->bindParam(":publisher", $book->getPublisher());
        $stmt->bindParam(":publishYear", $book->getPublishYear());
        $stmt->bindParam(":price", $book->getPrice());
        $stmt->bindParam(":idCate", $book->getIdCategory());
        $stmt->execute();
    }

    public function getIdBook($id)
    {
        $sql = "SELECT * FROM books WHERE idBook= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $item = $stmt->fetch();
        $book = new Book($item["idBook"], $item["bookName"], $item['author'], $item['publisher'], $item['publishYear'], $item['price'], $item['idCategory']);
        return $book;
    }

    public function updateBook($bookName, $author, $publisher, $publishYear, $price, $idBook)
    {
        $sql = "UPDATE books SET bookName= :bookName, author= :author, publisher= :publisher, publishYear= :publishYear, price= :price WHERE idBook = :idBook";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":bookName", $bookName);
        $stmt->bindParam(":author", $author);
        $stmt->bindParam(":publisher", $publisher);
        $stmt->bindParam(":publishYear", $publishYear);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":idBook", $idBook);
        $stmt->execute();
    }

    public function searchBook($key)
    {
        $sql = "SELECT * FROM `books` WHERE `bookName` LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":keyword", '%' . $key . '%');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $book = new Book($item["idBook"], $item["bookName"], $item['author'], $item['publisher'], $item['publishYear'], $item['price'], $item['idCategory']);
            array_push($arr, $book);
        }
        return $arr;
    }

    public function getStudent()
    {
        $sql = "SELECT * FROM students";
        $stmt = $this->database->query($sql);
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

    public function getIdStudent($id)
    {
        $sql = "SELECT * FROM students WHERE id = '$id'";
        $stmt = $this->database->query($sql);
        $item = $stmt->fetch();
        $student = new Student($item['id'], $item['studentName'], $item['gender'], $item['address'], $item['email'], $item['phone']);
        return $student;
    }

    public function updateStudent($student)
    {
        $sql = "UPDATE students SET studentName = :studentName, gender = :gender, address = :address, email = :email, phone = :phone WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $student->getId());
        $stmt->bindParam(":studentName", $student->getStudentName());
        $stmt->bindParam(":gender", $student->getGender());
        $stmt->bindParam(":address", $student->getAddress());
        $stmt->bindParam(":email", $student->getEmail());
        $stmt->bindParam(":phone", $student->getPhone());
        $stmt->execute();
    }

    public function infoOrderById($id)
    {
        $sql = "SELECT students.studentName, students.phone, borrowOrder.borrowDate, borrowOrder.returnDate, borrowOrder.status, books.bookName, books.price, borrowOrder.comment
                FROM students
                INNER JOIN borrowOrder ON students.id = borrowOrder.id
                INNER JOIN details ON borrowOrder.card = details.card
                INNER JOIN books ON details.idBook = books.idBook
                WHERE students.id= :id ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function infoOrder()
    {
        $sql = "SELECT * FROM borrowOrder";
        $stmt= $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function searchStudent($key)
    {
        $sql = "SELECT * FROM `students` WHERE `studentName` LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":keyword", '%' . $key . '%');
        $stmt->execute();
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item) {
            $student = new Student($item["id"], $item["studentName"], $item['gender'], $item['address'], $item['email'], $item['phone']);
            array_push($arr, $student);
        }
        return $arr;
    }


}