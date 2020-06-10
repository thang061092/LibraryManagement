<?php


namespace App\Model;


class Book
{
    protected $idBook;
    protected $bookName;
    protected $author;
    protected $publisher;
    protected $publishYear;
    protected $price;
    protected $idCategory;

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
}