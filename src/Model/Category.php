<?php


namespace App\Model;


class Category
{
    protected $id;
    protected $categoryName;
    protected $description;

    public function __construct($id,$categoryName,$description)
    {
        $this->id=$id;
        $this->categoryName=$categoryName;
        $this->description=$description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }
}