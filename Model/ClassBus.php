<?php
class Bus {
    private $id;
    private $busnumber;
    private $licenseplate;
    private $capacity;
    private $companyId;

    public function __construct($id, $busnumber, $licenseplate, $capacity, $companyId){
        $this->id = $id;
        $this->busnumber = $busnumber;
        $this->licenseplate = $licenseplate;
        $this->capacity = $capacity;
        $this->companyId = $companyId;
    }

    // Getter methods
    public function getId(){
        return $this->id;
    }

    public function getBusNumber(){
        return $this->busnumber;
    }

    public function getLicensePlate(){
        return $this->licenseplate;
    }

    public function getCapacity(){
        return $this->capacity;
    }

    public function getCompanyId(){
        return $this->companyId;
    }
}

?>
