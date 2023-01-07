<?php

class Visit{
    protected int $employeeID;
    protected $date;
    protected string $diagnosis;
    protected $listOfMeds;

    public function __construct($employeeID, $date, $diagnosis)
    {
        $this->employeeID = $employeeID;
        $this->date = $date;
        $this->diagnosis = $diagnosis;
        $this->listOfMeds = array();
    }


    public function getListOfMeds()
    {
        return $this->listOfMeds;
    }

    public function setListOfMeds($listOfMeds)
    {
        $this->listOfMeds = $listOfMeds;
    }

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    public function setDiagnosis($diagnosis)
    {
        $this->diagnosis = $diagnosis;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}



?>