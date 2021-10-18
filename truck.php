<?php
require_once './vehicle.php';

class Truck extends Vehicle
{
    private int $capacity;
    private int $load = 0;

    public function __construct(string $color, int $nbSeats, int $capacity)
    {

        $this->capacity = $capacity;
        parent::__construct($color, $nbSeats);
    }




    public function isFull()
    {   
        $message = '';
        

        if ($this->load < $this->capacity){
            $message = 'in filling';
        }
        if ($this->load >= $this->capacity){
            $message = 'truck is full';
        }
        return $message;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

}