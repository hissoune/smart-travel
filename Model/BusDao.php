<?php
require_once 'config\Connection.php';
require_once 'Model\ClassBus.php';

class BusDao {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function fetchingBuses() {
        $query = "SELECT * FROM Bus";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addBus($bus) {
        $query = "INSERT INTO bus (busnumber, licenseplate, capacity, companyname) 
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
