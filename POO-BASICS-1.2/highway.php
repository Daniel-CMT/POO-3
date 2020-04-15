<?php



abstract class Highway
{
    /**
    * @var array
     *
    */
    public $currentVehicles = [];

    /**
    * @var integer
    */
    public $nbLane;

    /**
    * @var integer
    */
    public $maxSpeed;

    public function __construct(int $maxSpeed, int $nbLane)
    {
        $this->maxSpeed = $maxSpeed;
        $this->nbLane = $nbLane;
    }

    public function getCurrentVehicle(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(Vehicule $currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract function addVehicle(Vehicule $vehicle);
}