<?php

namespace App\Model;

class User
{
    protected $id;
    protected $userName;
    protected $password;
    protected $email;
    protected $phone;
    protected $role;

    public function __construct($userName,
                                $email,
                                $phone,
                                $role)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->phone = $phone;
        $this->role = $role;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}