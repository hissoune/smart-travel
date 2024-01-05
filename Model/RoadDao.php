<?php
require_once 'Model\ClassRoad.php';

class RoadDao {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function getAllRoads() {
        $query = "SELECT * FROM Road";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $Roads = array();
        foreach($result as $row){
            $road = new Route($row['distance'],$row['duration'],$row['startcity'],$row['endcity']);
            $Roads[]=$road;
        }

        
        return $Roads;
    
    }
    
    public function addRoad($route) {
        $query = "INSERT INTO Road (distance, duration, startcity, endcity) 
                  VALUES (:distance, :duration, :start_city, :end_city)";
        $stmt = $this->db->prepare($query);
           $distance=$route->getDistance();
           $duration=$route->getDuration();
           $start_city=$route->getStartCity();
           $end_city=$route->getEndCity();


        $stmt->bindParam(':distance',$distance );
        $stmt->bindParam(':duration',$duration );
        $stmt->bindParam(':start_city', $start_city);
        $stmt->bindParam(':end_city', $end_city);
        $stmt->execute();
    }
    public function get_rout_by($starcitylast, $endcitylast)
{
    $query = "SELECT * FROM Road where startcity= '$starcitylast' and endcity='$endcitylast'";
    $stmt = $this->db->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
    public function updateRoad($road, $startcitylast,$endcitylast) {
        $query = "UPDATE Road 
                  SET distance = :distance, 
                  duration = :duration, 
                  startcity = :start_city, 
                  endcity = :end_city 
                  WHERE startcity  = :startcitylast and endcity  = :endcitylast ";
        $stmt = $this->db->prepare($query);
        $distance=$road->getDistance();
        $duration=$road->getDuration();
        $start_city=$road->getStartCity();
        $end_city=$road->getEndCity();

        $stmt->bindParam(':distance',  $distance);
        $stmt->bindParam(':duration', $duration);
        $stmt->bindParam(':start_city', $start_city);
        $stmt->bindParam(':end_city', $end_city);
        $stmt->bindParam(':startcitylast', $startcitylast);
        $stmt->bindParam(':endcitylast', $endcitylast);
        $stmt->execute();
    }

    public function delet_Rout($starcitylast,$endcitylast) {
        $query = "DELETE FROM Road WHERE startcity = :start_city and endcity = :end_city";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':start_city', $starcitylast);
        $stmt->bindParam(':end_city', $endcitylast);
        $stmt->execute();
    }
}
?>
