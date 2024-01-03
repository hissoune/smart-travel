<?php 

include 'Model\ScheduleDao.php';
include 'Model\companyDAO.php';


  class Controler_schet{
   
    public static function get_scheduel(){
        $ScheduleDAO = new ScheduleDAO();
          $Schedule= $ScheduleDAO->getAllSchedules();
          include 'view\schedule\schedulesIndex.php';
    }
    public static function get_comp_select() {
        $comp_select = new CompanyDAO();
        $comp_slct = $comp_select->fetchingcompanys();
        include 'view\form_serach.php';
      }
    public static function get_scheduel_serch($departureCity,$arrivalCity,$date_trip,$num_papl){
 
        

            $ScheduleDAO = new ScheduleDAO();
            $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDate($departureCity,$arrivalCity,$date_trip,$num_papl);
            
            include 'view\serch.php';
            
           
       
    
    
    }


    public static function get_scheduel_filred($departureCity,$arrivalCity,$date_trip,$num_papl){
     
  
      
        extract($_GET)  ;
    

        $ScheduleDAO = new ScheduleDAO();
        $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDateandfilter($departureCity,$arrivalCity,$date_trip,$num_papl,$by_price,$bus_name,$company_name);
        require_once 'view\serch.php';
   


}
    
    
}
    
  

  





