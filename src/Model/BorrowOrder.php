<?php


namespace App\Model;


class BorrowOrder
{
    protected $card;
    protected $borrowDate;
    protected $returnDate;
    protected $status;
    protected $comment;
    protected $id;

    public function __construct($card, $borrowDate, $returnDate, $status, $comment, $id)
    {
        $this->card = $card;
        $this->borrowDate = $borrowDate;
        $this->returnDate = $returnDate;
        $this->status = $status;
        $this->comment = $comment;
        $this->id = $id;

    }

    /**
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @return mixed
     */
    public function getBorrowDate()
    {
        return $this->borrowDate;
    }

    /**
     * @return mixed
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $card
     */
    public function setCard($card)
    {
        $this->card = $card;
    }
}