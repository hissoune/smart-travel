

<?php 


class Route {
    private $distance;
    private $duration;
    private $startCity;
    private $endCity;

    public function __construct($distance, $duration, $startCity, $endCity) {
        $this->distance = $distance;
        $this->duration = $duration;
        $this->startCity = $startCity;
        $this->endCity = $endCity;
    }

    // Getter methods for distance, duration, startCity, and endCity
    public function getDistance() {
        return $this->distance;
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getStartCity() {
        return $this->startCity;
    }

    public function getEndCity() {
        return $this->endCity;
    }
}

