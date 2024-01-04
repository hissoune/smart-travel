<?php
require_once 'Model\ClassCompany.php';

class CompanyDAO {
    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 

    public function fetchingcompanys() {
        $query = "SELECT * FROM Company";
        $stmt = $this->db->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $comp = array();
        foreach ($result as $row) {
            // Append each company's details as an array to the $comp array
            $comp[] = [
                  'id'=>$row["id"],
                'companyname' => $row["companyname"],
                'shortname' => $row["shortname"],
                'img' => $row["img"]
            ];
        }
        return $comp;
    }
    

    public function addcompany($comp) {
        // Check if the company already exists based on company name
        $query = "SELECT * FROM company WHERE companyname = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$comp->getCompanyname()]);
    
        // Check if the company already exists
        if ($stmt->fetch(PDO::FETCH_ASSOC)) {
            echo 'Company already exists.';
        } else {
            // Company doesn't exist, proceed with the insertion
            $query = "INSERT INTO company (companyname, shortname, img) 
                      VALUES (?, ?, ?)";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$comp->getCompanyname(), $comp->getShortname(), $comp->getImg()]);
            echo 'Company added successfully.';
        }
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
        $query = "DELETE FROM bus WHERE busnumber = $id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}
?>
