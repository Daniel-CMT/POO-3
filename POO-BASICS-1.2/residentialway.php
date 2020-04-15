<?php

require_once 'highway.php';

final class Residentialway extends Highway
{
    public $nbLane;

    public $maxSpeed;

    function __construct()
    {
        parent::__construct(50, 2);
    }

    function addVehicle(Vehicule $vehicle)
    {
            parent::setCurrentVehicles($vehicle);
    }
}