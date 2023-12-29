<?php
$action = isset($_GET['action']) ? $_GET['action'] : '';
$action = $_GET['action'];

switch ($action) {
    
    case 'bus_management':
        include 'Controller\buscontroler.php';
        $controlerbus = new Controler_bus();
        $controlerbus->get_buses();
        break;

        case 'add_bus':
            include 'view\add_bus.php';
       
            break;

            case 'insert_buses':
                include 'Controller\buscontroler.php';
                 $controlerbus = new Controler_bus();
                 $controlerbus->insert_buses();
           
                break;
    

    // Add more cases as needed

    default:
    include 'Controller\controler_ville.php';
    $controlerville = new Controler_ville();
    $controlerville->get_ville_ville();
        // Handle default case if needed
        break;
}
?>
