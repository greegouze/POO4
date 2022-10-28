<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    protected int $nbLane = 2; 
    protected int $maxSpeed = 50;
    

    public function setCurrentVehicules($currentVehicules)
    {
        $this->currentVehicules[] = $currentVehicules;
    }

    public function addVehicule(object $vehicle)
    {
        $this->setCurrentVehicules($vehicle);
        return 'Succes';
    }
}