<?php

require_once 'vehicle.php';

class Truck extends Vehicule{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $stockage;

    /**
     * @var int
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockage)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockage = $stockage;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getStockage(): int
    {
        return $this->stockage;
    }

    public function setStockage(int $stockage)
    {
        $this->stockage = $stockage;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading)
    {
        $this->loading = $loading;
    }

    public function isFilling()
    {
        $state = "";
        if ($this->stockage == $this->loading)
        {
            $state = "Full";
        }
        else
        {
            $state = "In filling";
        }
        return $state;
    }
}
