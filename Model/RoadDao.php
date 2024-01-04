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
        return $result;
    }
    
    public function addRoad($route) {
        $query = "INSERT INTO Road (distance, duration, startcity, endcity) 
                  VALUES (:distance, :duration, :start_city, :end_city)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':distance', $route->getDistance());
        $stmt->bindParam(':duration', $route->getDuration());
        $stmt->bindParam(':start_city', $route->getStartCity());
        $stmt->bindParam(':end_city', $route->getEndCity());
        $stmt->execute();
    }
    

    public function updateRoad($road, $id) {
        $query = "UPDATE Road 
                  SET distance = :distance, 
                      duration = :duration, 
                      start_city = :start_city, 
                      end_city = :end_city 
                  WHERE road_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':distance', $road->getDistance());
        $stmt->bindParam(':duration', $road->getDuration());
        $stmt->bindParam(':start_city', $road->getStartCity());
        $stmt->bindParam(':end_city', $road->getEndCity());
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function deleteRoad($id) {
        $query = "DELETE FROM Road WHERE road_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
