<?php 
include 'Model\BusDao.php';
include 'Model\companyDAO.php';
  class Controler_bus{

    public static function get_buses(){
          $bus = new BusDao();
          $buses= $bus->fetchingBuses();
          include 'view\bus_management.php';
    }
   // Assuming the changes have been made in the fetchingcompanys() method...

public static function get_comp_select() {
  $comp_select = new CompanyDAO();
  $comp_slct = $comp_select->fetchingcompanys();
  
  include 'view/add_bus.php';


}


    public static function insert_buses(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $busnumber = $_POST['busnumber'];
            $licenseplate = $_POST['licenseplate'];
            $capacity = $_POST['capacity'];
            $companyname = $_POST['companyname'];
    
            $bus = new Bus($busnumber, $licenseplate, $capacity, $companyname);
            $busDao = new BusDao();
             $busDao->addBus($bus);
            include 'view\add_bus.php';
            header(' location: index.php');
        }
    }

    public static function delet_buses($ID){
      
      $bus = new BusDao();
      $bus->delete($ID);
    header('location: index.php');
    }
  }    
  

 