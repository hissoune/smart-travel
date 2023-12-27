<?php
require_once 'YourDatabaseConnection.php';
require_once 'Road.php';

class RoadDao {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function getAllRoads() {
        $query = "SELECT * FROM roads";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addRoad($road) {
        $query = "INSERT INTO roads (distance, duration, start_city, end_city) 
                  VALUES (:distance, :duration, :start_city, :end_city)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':distance', $road->getDistance());
        $stmt->bindParam(':duration', $road->getDuration());
        $stmt->bindParam(':start_city', $road->getStartCity());
        $stmt->bindParam(':end_city', $road->getEndCity());
        $stmt->execute();
    }

    public function updateRoad($road, $id) {
        $query = "UPDATE roads 
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
        $query = "DELETE FROM roads WHERE road_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
