<?php



class Schedule {
    private $id;
    private $date;
    private $departureTime;
    private $arrivalTime;
    private $availableSeats;
    private $price;
    private $bus_id;
    private $startCity;
    private $endCity;

    public function __construct( $date, $departureTime, $arrivalTime, $availableSeats, $price, $bus_id, $startCity, $endCity) {
        
        $this->date = $date;
        $this->departureTime = $departureTime;
        $this->arrivalTime = $arrivalTime;
        $this->availableSeats = $availableSeats;
        $this->price = $price;
        $this->bus_id = $bus_id;
        $this->startCity = $startCity;
        $this->endCity = $endCity;
    }

    public function getId() {
        return $this->id;
    }

    public function getDate() {
        return $this->date;
    }

    public function getDepartureTime() {
        return $this->departureTime;
    }

    public function getArrivalTime() {
        return $this->arrivalTime;
    }

    public function getAvailableSeats() {
        return $this->availableSeats;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getBus_id() {
        return $this->bus_id;
    }

    public function getStartCity() {
        return $this->startCity;
    }

    public function getEndCity() {
        return $this->endCity;
    }
}
