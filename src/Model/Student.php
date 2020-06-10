<?php

namespace App\Model;

class Student
{
    protected $id;
    protected $studentName;
    protected $gender;
    protected $address;
    protected $email;
    protected $phone;

    public function __construct($id, $studentName, $gender, $address, $email, $phone)
    {
        $this->id = $id;
        $this->studentName = $studentName;
        $this->gender = $gender;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
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
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
}