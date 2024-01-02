<?php 

include 'Model\companyDAO.php';
  class Controler_company{

    public static function get_comanies(){
          $companys = new companyDAO();
          $company= $companys->fetchingcompanys();
          include 'view\company_management.php';
    }
   // Assuming the changes have been made in the fetchingcompanys() method...



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





    public static function insert_compaany(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $comp_name = $_POST['companyname'];
            $short_name = $_POST['short'];
            $photo = basename($_FILES['imag_comp']['name']);
            $targetPath = 'view/images/' . $photo;
            $tempPath = $_FILES['imag_comp']['tmp_name'];
    
            if (move_uploaded_file($tempPath, $targetPath)) {

            $comp = new Company($comp_name, $short_name,  $photo);
            $compDao = new companyDAO();
             $compDao->addcompany($comp);
           } 
                
    
           
            
        }
include 'view\add_comp.php';


    }

    public static function delet_buses($ID){
      
      $bus = new BusDao();
      $bus->delete($ID);
    header('location: index.php');
    }
  }    
  

 