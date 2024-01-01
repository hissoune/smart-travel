<?php 

include 'Model\ScheduleDao.php';

  class Controler_schet{
   
    public static function get_scheduel(){
        $ScheduleDAO = new ScheduleDAO();
          $Schedule= $ScheduleDAO->getAllSchedules();
          include 'view\schedule\schedulesIndex.php';
    }
    public static function get_scheduel_serch($departureCity,$arrivalCity,$travelDate,$numPeople){
            

            $ScheduleDAO = new ScheduleDAO();
            $schedueles = $ScheduleDAO->getSchedulesByCitiesAndDate($departureCity,$arrivalCity,$travelDate,$numPeople);
            require_once 'view\serch.php';
       
    
    
    }
    
    
}
    
  

  





