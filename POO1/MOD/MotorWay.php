<?php
require_once 'HighWay.php';

class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function setCurrentVehicules($currentVehicules): void
    {
        $this->currentVehicules[] = $currentVehicules;
    }
    public function addVehicule(object $vehicle): string
    {
        $sentence = '';
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard){
            $sentence = 'Impossible';
        }
        else {
            $this->setCurrentVehicules($vehicle);
            $sentence = 'Succes';
        }
        return $sentence;
    }
}