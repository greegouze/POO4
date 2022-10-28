<?php

require_once './MOD/Vehicle.php';

class Car extends Vehicle {

   //const
   public const ALLOWED_ENERGIES = [

    'fuel',

    'electric',

];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;

    //construct
    public function __construct( string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

       //methodes


//getters



public function getEnergy():string
{
    return $this->energy;
}


public function getEnergyLevel(): int

{

    return $this->energyLevel;

}

public function getHasParkBrake()
{
    return $this->hasParkBrake;
}

//setter

public function setEnergy(string $energy): Car

{
    if (in_array($energy, self::ALLOWED_ENERGIES)){
    $this->energy = $energy;

    }
    return $this;
}

public function setEnergyLevel(int $energyLevel): void

{

    $this->energyLevel = $energyLevel;

}

public function setParkBrake(bool $hasParkBrake): void
{
    $this->hasParkBrake = $hasParkBrake;
}

public function start()
{
    if ($this->getHasParkBrake()) {
        throw (new Exception('brake set on !'));
    }
    return 'GO GO';
}

}