<?php
class Bus {
    private $busnumber;
    private $licenseplate;
    private $capacity;
    private $companyname;

    public function __construct($busnumber, $licenseplate, $capacity, $companyname){
        $this->busnumber = $busnumber;
        $this->licenseplate = $licenseplate;
        $this->capacity = $capacity;
        $this->companyname = $companyname;
    }

    // Getter methods
    public function getBusNumber(){
        return $this->busnumber;
    }

    public function getLicensePlate(){
        return $this->licenseplate;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function getCompanyName(){
        return $this->companyname;
    }
}
?>
