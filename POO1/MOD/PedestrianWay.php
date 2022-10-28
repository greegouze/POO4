<?php

require_once 'HighWay.php';

class PedestrianWay extends HighWay
{
    protected int $nbLane = 1; 
    protected int $maxSpeed = 10;
    

    public function setCurrentVehicules($currentVehicules): void
    {
        $this->currentVehicules[] = $currentVehicules;
    }
    public function addVehicule(object $vehicle): string
    {
        $sentence = '';
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $this->setCurrentVehicules($vehicle);
            $sentence = 'Succes';
        }
        else {
            $sentence = 'Impossible';
        }
        return $sentence;
    }
}