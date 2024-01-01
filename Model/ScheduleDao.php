
<?php

require_once 'config\Connection.php';
require_once 'Model\ClassSchedule.php';

class ScheduleDAO {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function getAllSchedules() {
        $query = "SELECT * FROM Schedule";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // SELECT * FROM Schedule where startcity= '' and endcity= '' and availableseats>= 22;
    }

    public function getSchedulesByCitiesAndDate($departureCity, $arrivalCity ,$travelDate, $numberof_peapl)
    {
        $query = "SELECT * FROM Schedule where startcity= '$departureCity' and endcity= '$arrivalCity' and availableseats>= $numberof_peapl and date='$travelDate' ";
        $stmt = $this->db->query($query);
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
