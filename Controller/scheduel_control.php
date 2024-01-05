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


    public static function get_scheduel_filred_bycompany($departureCity,$arrivalCity,$date_trip,$num_papl){
     
  
      
        extract($_GET)  ;
    

        $ScheduleDAO = new ScheduleDAO();
        $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDateandfilter_company($departureCity,$arrivalCity,$date_trip,$num_papl,$company_name);
        require_once 'view\serch.php';
   


}

public static function get_scheduel_filred_byprice($departureCity,$arrivalCity,$date_trip,$num_papl){
     
  
      
  extract($_GET)  ;


  $ScheduleDAO = new ScheduleDAO();
  $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDateandfilter_price($departureCity,$arrivalCity,$date_trip,$num_papl,$by_price);
  require_once 'view\serch.php';



}

public static function get_scheduel_filred_morning($departureCity,$arrivalCity,$date_trip,$num_papl){
     
  
      
  extract($_GET)  ;


  $ScheduleDAO = new ScheduleDAO();
  $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDateandfilter_morning($departureCity,$arrivalCity,$date_trip,$num_papl,$morning);
  require_once 'view\serch.php';



}

public static function get_scheduel_filred_evning($departureCity,$arrivalCity,$date_trip,$num_papl){
     
  
      
  extract($_GET)  ;


  $ScheduleDAO = new ScheduleDAO();
  $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDateandfilter_evning($departureCity,$arrivalCity,$date_trip,$num_papl,$evning);
  
  require_once 'view\serch.php';



}
public static function get_scheduel_filred_night($departureCity,$arrivalCity,$date_trip,$num_papl){
     
  
      
  extract($_GET)  ;


  $ScheduleDAO = new ScheduleDAO();
  $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDateandfilter_night($departureCity,$arrivalCity,$date_trip,$num_papl,$night);
  require_once 'view\serch.php';



}

public static function insert_data_sched(){
    extract($_POST);

    // Split the rout value into startcity and endcity
    list($startcity, $endcity) = explode('-', $rout);
    $schedule = new Schedule('',$date_sched, $departuretime, $arrivaltime, $availableseats, $price, $bus_id, $startcity, $endcity);
        
    $ScheduleDAO = new ScheduleDAO();
    $ScheduleDAO->addSchedule($schedule);
    header('location:index.php');
}

      public static function get_schet_id($id){
        $ScheduleDAO = new ScheduleDAO();
        $scheduel= $ScheduleDAO->get_schet_byid($id);  
        return $scheduel;
        
        
       
      }

public static function update_sched(){
    extract($_POST);

    // Split the rout value into startcity and endcity
    list($startcity, $endcity) = explode('-', $rout);
    $schedule = new Schedule('',$date_sched, $departuretime, $arrivaltime, $availableseats, $price, $bus_id, $startcity, $endcity);
        
    $ScheduleDAO = new ScheduleDAO();
    $ScheduleDAO->addSchedule($schedule);
    header('location:index.php');
}
 
public static function updat_data_sched(){
    extract($_POST);

    // Split the rout value into startcity and endcity
    list($startcity, $endcity) = explode('-', $rout);
    $schedule = new Schedule('',$date_sched, $departuretime, $arrivaltime, $availableseats, $price, $bus_id, $startcity, $endcity);
    $ScheduleDAO = new ScheduleDAO();
    $ScheduleDAO->updateSchedule($schedule , $id);
    header('location:index.php?action=scheduel_management');

}
   public static function delet_sched($id){
    $ScheduleDAO = new ScheduleDAO();
    $ScheduleDAO->deleteSchedule($id);
    header('location:index.php?action=scheduel_management');

   }
}
    
  

  





