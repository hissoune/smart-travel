<?php 
include 'config\Connection.php';
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
        return $result;
    }

}