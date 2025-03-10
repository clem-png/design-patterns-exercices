<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;

class VehiculeFactory
{

    public static function create(string $vehiculeType){
        switch ($vehiculeType){
            case "Car": return new Car(2.5,"essence");
            case "Truck": return new Truck(7.5,"diesel");
            case "Bicycle": return new Bicycle(0,"sueur");
            default: return new Car(0,"");
        }

    }

    public static function createByParam(float $distance, float $poids){
        if($distance < 20 && $poids < 20){
            return new Bicycle(0,"sueur");
        }else if( $poids < 200){
            return new Car(2.5,"essence");
        }else{
            return new Truck(7.5,"diesel");
        }
    }

}