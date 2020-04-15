<?php

require_once 'highway.php';

final class Predestrianway extends Highway
{
    public $nbLane;

    public $maxSpeed;

    function __construct()
    {
        parent::__construct(10, 1);
    }

    function addVehicle(Vehicule $vehicle)
    {
        if ( $vehicle instanceof Bicycle || $vehicle instanceof SkateBoard)
        {
            parent::setCurrentVehicles($vehicle);
        }
    }
}
