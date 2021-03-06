<?php


namespace App\Model;


class Book
{
    public $idBook;
    public $bookName;
    public $author;
    public $publisher;
    public $publishYear;
    public $price;
    public $idCategory;

    public function __construct($idBook,$bookName,$author,$publisher,$publishYear,$price,$idCategory)
    {
        $this->idBook=$idBook;
        $this->bookName=$bookName;
        $this->author=$author;
        $this->publisher=$publisher;
        $this->publishYear=$publishYear;
        $this->price=$price;
        $this->idCategory=$idCategory;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->idBook;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @return mixed
     */
    public function getPublishYear()
    {
        return $this->publishYear;
    }

    /**
     * @param mixed $idCategory
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
    }

    /**
     * @param mixed $idBook
     */
    public function setIdBook($idBook)
    {
        $this->idBook = $idBook;
    }
}