<?php

class Chart{
    protected int $id;
    protected string $animalType;
    protected string $animalName;
    protected string $dob;
    protected $listOfVisits;
    protected $listOfMeds;

    public function __construct($id, $animalType, $animalName, $dob)
    {
        $this->id = $id;
        $this->animalType = $animalType;
        $this->animalName = $animalName;
        $this->dob = $dob;
        $this->listOfVisits = array();
        $this->listOfMeds = array();
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    public function setAnimalType(string $animalType)
    {
        $this->animalType = $animalType;
    }

    public function getAnimalName()
    {
        return $this->animalName;
    }

    public function setAnimalName(string $animalName)
    {
        $this->animalName = $animalName;

    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob(string $dob)
    {
        $this->dob = $dob;
    }

    public function getListOfVisits()
    {
        return $this->listOfVisits;
    }

    public function setListOfVisits($listOfVisits)
    {
        $this->listOfVisits = $listOfVisits;

    }

    public function getListOfMeds()
    {
        return $this->listOfMeds;
    }

    public function setListOfMeds($listOfMeds)
    {
        $this->listOfMeds = $listOfMeds;
    }
}


?>