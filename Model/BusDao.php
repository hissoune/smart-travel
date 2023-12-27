<?php
require_once 'Brief9\config\Connection.php';
require_once 'Brief9\Model\Bus.php';

class BusDao {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function fetchingBuses() {
        $query = "SELECT * FROM buses";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addBus($bus) {
        $query = "INSERT INTO buses (bus_number, license_plate, capacity, company_name) 
                  VALUES ('" . $bus->getBusNumber() . "', '" . $bus->getLicensePlate() . "', '" . $bus->getCapacity() . "', '" . $bus->getCompanyName() . "')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function modify($bus, $id) {
        $query = "UPDATE buses 
                  SET bus_number = '" . $bus->getBusNumber() . "', 
                      license_plate = '" . $bus->getLicensePlate() . "', 
                      capacity = '" . $bus->getCapacity() . "', 
                      company_name = '" . $bus->getCompanyName() . "' 
                  WHERE bus_id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM buses WHERE bus_id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}
?>
