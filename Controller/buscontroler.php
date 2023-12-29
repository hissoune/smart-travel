<?php 
include 'Model\BusDao.php';
  class Controler_bus{

    public static function get_buses(){
          $bus = new BusDao();
          $buses= $bus->fetchingBuses();
          include 'view\bus_management.php';
    }
    public static function insert_buses(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $busnumber = $_POST['busnumber'];
            $licenseplate = $_POST['licenseplate'];
            $capacity = $_POST['capacity'];
            $companyname = $_POST['companyname'];
    
            $bus = new Bus($busnumber, $licenseplate, $capacity, $companyname);
            $busDao = new BusDao();
            $buses = $busDao->addBus($bus);
            include 'view\add_bus.php';
        }
    }
  }    
  

 