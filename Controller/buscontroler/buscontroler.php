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

public static function get_comp_select_modify($id) {
  $comp_select = new CompanyDAO();
  $comp_slct = $comp_select->fetchingcompanys();
  $bus = new BusDao();
  $buses= $bus->get_bus_byid($id);

      $Id = $id;
    $busnumber =  $buses['busnumber'];
    $licenseplate =  $buses['licenseplate'];
    $busnumber =  $buses['capacity'];
    include 'view\modify_bus.php';
}
public static function modify_buses($id){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
      $busnumber = $_POST['busnumber'];
      $licenseplate = $_POST['licenseplate'];
      $capacity = $_POST['capacity'];
      $companyname = $_POST['companyname'];

      $bus = new Bus($busnumber, $licenseplate, $capacity, $companyname);
      $busDao = new BusDao();
       $busDao->modify_bus($bus , $id);
      include 'view\add_bus.php';
  }
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
        }
    }

    public static function delet_buses($ID){
      
      $bus = new BusDao();
      $bus->delete($ID);
    header('location: index.php');
    }
  }    
  

 