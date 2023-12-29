<?php



if (isset($_GET['action']) ) {
    $action = $_GET['action'];


switch ($action) {
    case 'home':
        include 'Controller\controler_ville.php';
        $controlerville = new Controler_ville();
        $controlerville->get_ville_ville();
        break;
    
    case 'bus_management':
        include 'Controller\buscontroler\buscontroler.php';
        $controlerbus = new Controler_bus();
        $controlerbus->get_buses();
        break;

        case 'add_bus':
            include 'Controller\buscontroler\buscontroler.php';
            $controlerbus = new Controler_bus();
           $controlerbus->get_comp_select();
            
       
            break;

            case 'insert_buses':
                include 'Controller\buscontroler\buscontroler.php';
                 $controlerbus = new Controler_bus();
                 $controlerbus->insert_buses();
           
                break;
                case 'delete':
                    $ID = $_GET['id'];
                    
                    include 'Controller\buscontroler\buscontroler.php';
                    
                     $controlerbus = new Controler_bus();
                     $controlerbus->delet_buses($ID);
               
                    break;
    

    // Add more cases as needed

    default:
 
        // Handle default case if needed
        break;
}

}else {
    include 'Controller\controler_ville.php';
    $controlerville = new Controler_ville();
    $controlerville->get_ville_ville();
}
?>
