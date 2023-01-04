<?php

class Chart{
    protected Animal $animal;
    protected Client $client;
    protected $listOfVisits;
    protected $listOfMeds;

    public function __construct($animal, $client, $animalType, $animalName)
    {
        $this->animal = $animal;
        $this->client = $client;
        $this->listOfVisits = array();
        $this->listOfMeds = array();
    }


    public function getAnimal()
    {
        return $this->animal;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setAnimalName($client)
    {
        $this->client = $client;

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