<?php

class Employee extends User{

    protected string $position;

    public function __construct($id, $name, $email, $password, $phone, $type, $position)
    {
        parent::__construct($id, $name, $email, $password, $phone, $type);
        $this->position = $position;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }
    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition(string $position)
    {
        $this->position = $position;
    }
}



?>