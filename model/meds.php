<?php

class Meds{
    protected string $medName;
    protected string $medType;

    public function __construct($medName, $medType)
    {
        $this->medName = $medName;
        $this->medType = $medType;
    }

    public function getMedType()
    {
        return $this->medType;
    }

    public function setMedType($medType)
    {
        $this->medType = $medType;
    }
    public function getMedName()
    {
        return $this->medName;
    }

    public function setMedName($medName)
    {
        $this->medName= $medName;
    }
}



?>