<?php
class Company {
    private $id;
    private $companyname;
    private $shortname;
    private $img;

    public function __construct($id, $companyname, $shortname, $img){
        $this->id = $id;
        $this->companyname = $companyname;
        $this->shortname = $shortname;
        $this->img = $img;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of companyname
     */ 
    public function getCompanyname()
    {
        return $this->companyname;
    }

    /**
     * Get the value of shortname
     */ 
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }
}


?>