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

    public function insert_rout()
    {
        extract($_POST);
        
            // Create a Route object
            $route = new Route( $distance,$duration,$departureCity,$arrivalCity);
            $routeDAO = new RoadDao();
            $routeDAO->addRoad($route);

            // Redirect to the index page or show a success message
            header('Location: index.php');
            exit();
       
    }

    public function edit($routeID)
    {
        // Handle the editing of an existing route
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate and process the form data
            $startCityID = $_POST['startCityID'];
            $endCityID = $_POST['endCityID'];
            $distance = $_POST['distance'];
            $duration = $_POST['duration'];

            // Create a Route object
            $route = new Route($routeID, $startCityID, $endCityID, $distance, $duration);

            // Update the route in the database
            $this->routeDAO->updateRoute($route);

            // Redirect to the index page or show a success message
            header('Location: index.php');
            exit();
        } else {
            // Display the form to edit an existing route
            $route = $this->routeDAO->getRouteById($routeID);
            // Include your view file (e.g., route/edit.php)
            include '../view/route/edit.php';
        }
    }

    public function delete($routeID)
    {
        // Handle the deletion of an existing route
        $this->routeDAO->deleteRoute($routeID);
        // Redirect to the index page or show a success message
        header('Location: index.php');
        exit();
    }
}
