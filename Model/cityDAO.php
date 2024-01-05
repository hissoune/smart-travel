<?php 
include 'Model\Classcity.php';

class CityDAO{

    private $db;

    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection();
    } 
    public  function get_citys(){
    
        $sql = "SELECT * from  City ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $citys = array();
        foreach ($result as $row) {
            $city = new City($row['cityname']);
            $citys[] = $city;
        
    }
    return $citys;
 }}