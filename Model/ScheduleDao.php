
<?php

require_once 'config\Connection.php';
require_once 'Model\ClassSchedule.php';

class ScheduleDAO {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function get_comp_bus_names(){

        $query = "SELECT  Bus.licenseplate,Bus.id ,company.companyname FROM Schedule JOIN Bus ON Schedule.bus_id = Bus.id JOIN Company ON Bus.comp_id = company.id  group by companyname";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_citys_from_route(){

        $query = " SELECT Road.startcity, Road.endcity
    
        
         FROM Schedule
         JOIN Road ON Schedule.startcity = Road.startcity AND Schedule.endcity = Road.endcity
         GROUP BY Road.startcity, Road.endcity";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllSchedules() {
        $query = "SELECT * FROM Schedule";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        // SELECT * FROM Schedule where startcity= '' and endcity= '' and availableseats>= 22;
    }

    public function getSchedulesByCitiesAndDate($departureCity, $arrivalCity ,$travelDate, $numberof_peapl)
    
    
    {       

        $query = "SELECT Schedule.*, Bus.licenseplate, company.companyname , company.img FROM Schedule JOIN Bus ON Schedule.bus_id = Bus.id JOIN Company ON Bus.comp_id = company.id  where startcity= '$departureCity' and endcity= '$arrivalCity' and availableseats>= $numberof_peapl and date='$travelDate' ";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public function getSchedulesByCitiesAndDateandfilter($departureCity, $arrivalCity, $travelDate, $numPeople, $priceFilter,  $companyNameFilter)
    {
        // Base query
        $query = "SELECT Schedule.*, Bus.licenseplate, company.companyname, company.img FROM Schedule 
                  JOIN Bus ON Schedule.bus_id = Bus.id 
                  JOIN Company ON Bus.comp_id = company.id
                  WHERE startcity = :departureCity 
                        AND endcity = :arrivalCity 
                        AND availableseats >= :numPeople 
                        AND date = :travelDate 
                        AND company.companyname = :companyNameFilter";
                
        // Add the condition for ordering by price if $priceFilter is true
        if ($priceFilter) {
            $query .= " ORDER BY price ASC";
        }
    
        // Add the condition for filtering by bus name if $busNameFilter is not empty
        
    
        // Prepare and execute the query
        $params = [
            ':departureCity' => $departureCity,
            ':arrivalCity' => $arrivalCity,
            ':numPeople' => $numPeople,
            ':travelDate' => $travelDate,
            ':companyNameFilter' => $companyNameFilter,
            
        ];
    
        // Add the parameter for bus name if $busNameFilter is not empty
        
    
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $result;
    }
    

    public function addSchedule($schedule) {
        $query = "INSERT INTO Schedule (date, departuretime, arrivaltime, availableseats, price, busnumber, startcity, endcity) 
                  VALUES (:date, :departuretime, :arrivaltime, :availableseats, :price, :busnumber, :startcity, :endcity)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':date', $schedule->getDate());
        $stmt->bindParam(':departuretime', $schedule->getDepartureTime());
        $stmt->bindParam(':arrivaltime', $schedule->getArrivalTime());
        $stmt->bindParam(':availableseats', $schedule->getAvailableSeats());
        $stmt->bindParam(':price', $schedule->getPrice());
        $stmt->bindParam(':busnumber', $schedule->getBusNumber());
        $stmt->bindParam(':startcity', $schedule->getStartCity());
        $stmt->bindParam(':endcity', $schedule->getEndCity());
        $stmt->execute();
    }

    public function updateSchedule($schedule, $id) {
        $query = "UPDATE Schedule 
                  SET date = :date, 
                      departuretime = :departuretime, 
                      arrivaltime = :arrivaltime, 
                      availableseats = :availableseats, 
                      price = :price, 
                      busnumber = :busnumber, 
                      startcity = :startcity, 
                      endcity = :endcity 
                  WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':date', $schedule->getDate());
        $stmt->bindParam(':departuretime', $schedule->getDepartureTime());
        $stmt->bindParam(':arrivaltime', $schedule->getArrivalTime());
        $stmt->bindParam(':availableseats', $schedule->getAvailableSeats());
        $stmt->bindParam(':price', $schedule->getPrice());
        $stmt->bindParam(':busnumber', $schedule->getBusNumber());
        $stmt->bindParam(':startcity', $schedule->getStartCity());
        $stmt->bindParam(':endcity', $schedule->getEndCity());
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function deleteSchedule($id) {
        $query = "DELETE FROM Schedule WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
