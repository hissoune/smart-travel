<?php 
include 'Model\cityDAO.php';
  class Controler_ville{

    public static function get_ville_ville(){
          $ville = new cityDAO();
          $villes= $ville->get_citys();
          include 'view\index.php';
    }
    }
    
  

 