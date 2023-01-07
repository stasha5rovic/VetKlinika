<?php

class Chart{
    protected int $animalID;
    protected int $clientID;
    protected $listOfVisits;
    protected $nextCheckUp;

    public function __construct($animalID, $clientID)
    {
        $this->animalID = $animalID;
        $this->clientID = $clientID;
        $this->listOfVisits = array();
        
    }


    public function getAnimalID()
    {
        return $this->animalID;
    }

    public function getClientID()
    {
        return $this->clientID;
    }

    public function getListOfVisits()
    {
        return $this->listOfVisits;
    }

    public function setListOfVisits($listOfVisits)
    {
        $this->listOfVisits = $listOfVisits;
    }

    public function getNextCheckUp()
    {
        return $this->nextCheckUp;
    }

    public function setNextCheckUp($nextCheckUp)
    {
        $this->nextCheckUp = $nextCheckUp;

    }

    

}


?>