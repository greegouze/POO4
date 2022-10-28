<?php

require_once './MOD/Vehicle.php';

class Truck extends Vehicle {

    private int $capacity;
    private int $onLoad = 0;

    //costruct
    public function __construct(  string $color, int $nbSeats, string $energyType, int $capacity, int $onLoad){

        parent::__construct($color, $nbSeats, $energyType);
        $this->capacity = $capacity;
        $this->onLoad = $onLoad;
    }
 //methode 

 public function isFull(int $onLoad) :string {

$sentence = 'In filling';
if($this->capacity === $onLoad){
    $sentence = 'full';
}
if ($this->capacity < $onLoad){
    $sentence = 'STOP !!';
}
return $sentence;
 }

 //getters
 public function getCapacity(){
   return $this->capacity;
 }

 public function getOnLoad(){
  return $this->onLoad; 
 }

 //setters 
 public function setCapacity(int $capacity){

    $this->capacity = $capacity;
 }

 public function setOnLoad(int $onLoad){
    $this->onLoad = $onLoad;
 }
}
