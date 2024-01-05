<?php
require_once 'Model\ClassBus.php';
require_once 'Model\ClassCompany.php';

class BusDao {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function fetchingBuses() {
        $query = "SELECT * FROM Bus";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $buses = array();
        foreach ($result as $row) {
            $bus = new Bus($row['id'], $row['busnumber'], $row['licenseplate'], $row['capacity'], $row['comp_id']);
            $buses[] = $bus;
        }
        return $buses;
    }
    public function get_companyname_byid($id){
           $query= "SELECT company.companyname from Bus join company on Bus.comp_id=company.id  where comp_id= $id GROUP BY companyname";
           $stmt = $this->db->query($query);
           $result = $stmt->fetch(PDO::FETCH_ASSOC);
           return $result['companyname'];
        
    }
    
    
    public function get_bus_byid($id) {
        $query = "SELECT * FROM Bus  where id = $id "  ;
        $stmt = $this->db->query($query);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

   
    public function addBus($bus) {
        // Check if the bus already exists based on bus number and license plate
        $query = "SELECT * FROM bus WHERE busnumber = ? OR licenseplate = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$bus->getBusNumber(), $bus->getLicensePlate()]);
    
        // Check if the bus already exists
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            echo 'Bus already exists.';
        } else {
            // Bus doesn't exist, proceed with the insertion
            $query = "INSERT INTO bus (busnumber, licenseplate, capacity, companyname) 
                      VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$bus->getBusNumber(), $bus->getLicensePlate(), $bus->getCapacity(), $bus->getCompanyName()]);
            echo 'Bus added successfully.';
        }
    }
    
    public function modify_bus($bus, $id) {
        $query = "UPDATE bus 
                  SET busnumber = ". $bus->getBusNumber(). ", 
                      licenseplate = '" . $bus->getLicensePlate() . "', 
                      capacity =  " .$bus->getCapacity() ." , 
                      capacity = '" . $bus->getCompanyName() . "' 
                  WHERE id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM bus WHERE id = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}
?>
