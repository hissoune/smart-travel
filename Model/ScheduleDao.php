
<?php

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
        $query = "INSERT INTO Schedule (date, departuretime, arrivaltime, availableseats, price, bus_id, startcity, endcity) 
                  VALUES (:date, :departuretime, :arrivaltime, :availableseats, :price, :bus_id, :startcity, :endcity)";
        $stmt = $this->db->prepare($query);
    
        $date = $schedule->getDate();
        $departuretime = $schedule->getDepartureTime();
        $arrivaltime = $schedule->getArrivalTime();
        $availableseats = $schedule->getAvailableSeats();
        $price = $schedule->getPrice();
        $bus_id = $schedule->getBus_id();
        $startcity = $schedule->getStartCity();
        $endcity = $schedule->getEndCity();
    
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':departuretime', $departuretime);
        $stmt->bindParam(':arrivaltime', $arrivaltime);
        $stmt->bindParam(':availableseats', $availableseats);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':bus_id', $bus_id);
        $stmt->bindParam(':startcity', $startcity);
        $stmt->bindParam(':endcity', $endcity);
    
        $stmt->execute();
    }
       public function get_schet_byid($id){
             
        $query = "SELECT * FROM Schedule where id = $id";
        $stmt = $this->db->query($query);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
       }

       public function updateSchedule($schedule, $id) {
        $query = "UPDATE Schedule 
                  SET date = :date, 
                      departuretime = :departuretime, 
                      arrivaltime = :arrivaltime, 
                      availableseats = :availableseats, 
                      price = :price, 
                      bus_id = :bus_id, 
                      startcity = :startcity, 
                      endcity = :endcity 
                  WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $date = $schedule->getDate();
        $departuretime = $schedule->getDepartureTime();
        $arrivaltime = $schedule->getArrivalTime();
        $availableseats = $schedule->getAvailableSeats();
        $price = $schedule->getPrice();
        $bus_id = $schedule->getBus_id();
        $startcity = $schedule->getStartCity();
        $endcity = $schedule->getEndCity();
    
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':departuretime', $departuretime);
        $stmt->bindParam(':arrivaltime', $arrivaltime);
        $stmt->bindParam(':availableseats', $availableseats);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':bus_id', $bus_id); // Changed from :busnumber to :bus_id
        $stmt->bindParam(':startcity', $startcity);
        $stmt->bindParam(':endcity', $endcity);
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
