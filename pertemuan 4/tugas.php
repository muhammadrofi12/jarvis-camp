<?php

class Vehicle
{
    public $wheel;
    public $brand;


    public function __construct($wheel, $brand)
    {
        $this->wheel = $wheel;
        $this->brand = $brand;
    }

    public function jumlahRoda()
    {
        echo "Kendaraan ini memiliki roda sebanyak $this->wheel roda";
    }
}

class car extends Vehicle
{
    public $passenger;

    public function __construct($wheel, $brand, $passenger)
    {
        parent::__construct($wheel, $brand);
        $this->passenger = $passenger;
    }

    public function maxPenumpang()
    {
        echo "Kendaraan ini mampu menampung sebanyak $this->passenger orang";
    }
}

// Output
$toyota = new car(4, "Toyota", 6);
echo "Mobil ini bermerek $toyota->brand <br>";
echo $toyota->jumlahRoda() . "<br>";
$toyota->maxPenumpang();

