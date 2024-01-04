<?php
include_once 'Model\RoadDao.php';
require_once 'Model\cityDAO.php';
class RouteController
{
    

    public static function indexRout()
{
    $routeDAO = new RoadDao();
    $routes = $routeDAO->getAllRoads();
    // Include your view file (e.g., route/index.php) to display the list
    include 'view\route\routeIndex.php';
}
        public static function getcitys(){
              
               $ville = new cityDAO();
               $villes= $ville->get_citys();
               include 'view\route\add.php';



        }

        public static function getcitys_modif(){
              
            $ville = new cityDAO();
            $villes= $ville->get_citys();
            return $villes;
     }

    public function insert_rout()
    {
        extract($_POST);
        
            // Create a Route object
            $route = new Route( $distance,$duration,$departureCity,$arrivalCity);
            $routeDAO = new RoadDao();
            $routeDAO->addRoad($route);

            // Redirect to the index page or show a success message
            header('location:index.php?action=route_management');
            exit();
       
    }

    public function edit($startcity,$endcity)
    {
        extract($_POST); 

        
            $route = new Route($distance,$duration, $departureCity, $arrivalCity);

            $routeDAO = new RoadDao();
            $routeDAO->updateRoad($route, $startcitylast,$endcitylast);

            // Redirect to the index page or show a success message
            header('location:index.php?action=route_management');
            exit();
       
    }

    public static function get_rout($starcitylast, $endcitylast){
            $routeDAO = new RoadDao();
            $route=$routeDAO->get_rout_by($starcitylast, $endcitylast);
            return $route;
    }

    public function delet_rout($starcitylast,$endcitylast)
    {
        $routeDAO = new RoadDao();
        $routeDAO-> delet_Rout($starcitylast,$endcitylast);
       
        header('location:index.php?action=route_management');
        exit();
    }
}
