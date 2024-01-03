<?php 

include 'Model\ScheduleDao.php';



  class Controler_schet{
   
    public static function get_scheduel(){
        $ScheduleDAO = new ScheduleDAO();
          $Schedule= $ScheduleDAO->getAllSchedules();
          include 'view\schedule\schedulesIndex.php';
    }
    public static function get_comp_select() {
        $comp_bus_select = new ScheduleDAO();
        $comp_bus_slct = $comp_bus_select->get_comp_bus_names();
        return $comp_bus_slct;

     
      }
      public static function get_citys() {
        $citys_select = new ScheduleDAO();
        $citys_slct = $citys_select->get_citys_from_route();
return     $citys_slct;
      }
    public static function get_scheduel_serch($departureCity,$arrivalCity,$date_trip,$num_papl){
 
        

            $ScheduleDAO = new ScheduleDAO();
            $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDate($departureCity,$arrivalCity,$date_trip,$num_papl);
            
            include 'view\serch.php';
            
           
       
    
    
    }


    public static function get_scheduel_filred($departureCity,$arrivalCity,$date_trip,$num_papl){
     
  
      
        extract($_GET)  ;
    

        $ScheduleDAO = new ScheduleDAO();
        $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDateandfilter($departureCity,$arrivalCity,$date_trip,$num_papl,$by_price,$company_name);
        require_once 'view\serch.php';
   


}
    
    
}
    
  

  





