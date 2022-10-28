<?php 

abstract class HighWay
{
    protected array $currentVehicle;
    protected int $nbLane;
    protected int $maxSpeed;

    //getters 
    public function getCurrentVehicle()
        {
            return $this->currentVehicle;
        }

    public function getNbLane()
    {
        return $this->nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

     //setters
     public function setCurrentVehicules($currentVehicules)
     {
         $this->currentVehicules = $currentVehicules;
     }
     public function setNbLane($nbLane)
     {
         $this->nbLane = $nbLane;
     }
     public function setMaxSpeed($maxSpeed)
     {
         $this->maxSpeed = $maxSpeed;
     }
     abstract function addVehicule(object $vehicle);
    
}