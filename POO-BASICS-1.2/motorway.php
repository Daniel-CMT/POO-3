<?php

require_once 'highway.php';

final class Motorway extends Highway
{
    public $nbLane;

    public $maxSpeed;

    function __construct()
    {
        parent::__construct(130, 4);
    }

    function addVehicle(Vehicule $vehicle)
    {
        if ( $vehicle instanceof Cars || $vehicle instanceof Truck)
        {
            parent::setCurrentVehicles($vehicle);
        }
    }
}