<?php



if (isset($_GET['action']) ) {
    $action = $_GET['action'];


switch ($action) {
    case 'home':
        require_once 'Controller\controler_ville.php';
        $controlerville = new Controler_ville();
        $controlerville->get_ville_ville();
        break;
    
    case 'bus_management':
        require_once 'Controller\buscontroler\buscontroler.php';
        $controlerbus = new Controler_bus();
        $controlerbus->get_buses();
        break;

        case 'add_bus':
            require_once 'Controller\buscontroler\buscontroler.php';
            $controlerbus = new Controler_bus();
           $controlerbus->get_comp_select();
            
       
            break;
            case 'modify_bus' : 
                $ID = $_GET['id'];
                require_once 'Controller\buscontroler\buscontroler.php';
                $controlerbus = new Controler_bus();
               $controlerbus->get_comp_select_modify($ID);
               break;

            case 'insert_buses':
                require_once 'Controller\buscontroler\buscontroler.php';
                 $controlerbus = new Controler_bus();
                 $controlerbus->insert_buses();
           
                break;
                case 'modify_buses':
                    $ID = $_GET['id'];
                    require_once 'Controller\buscontroler\buscontroler.php';
                 $controlerbus = new Controler_bus();
                 $controlerbus->modify_buses($ID);


                    break;
                case 'delete':
                    $ID = $_GET['id'];
                    
                    require_once 'Controller\buscontroler\buscontroler.php';
                    
                     $controlerbus = new Controler_bus();
                     $controlerbus->delet_buses($ID);
               
                    break;
                    case 'company_manage':
                        require_once 'Controller\company_control.php';
                        $controlerbus = new Controler_company();
                        $controlerbus->get_comanies();
                        break;

                        case 'add_company':
                            require_once 'view\add_comp.php';
                            
                           break;

                           case 'insert_companys':
                            require_once 'Controller\company_control.php';
                             $controlercomp = new Controler_company();
                             $controlercomp->insert_compaany();
                       
                            break;
                            case 'scheduel_management':
                                require_once 'Controller\scheduel_control.php';
                                $controler_sched = new Controler_schet();
                                $controler_sched->get_scheduel();
                                break;

                                case 'route_management':
                                    require_once 'Controller\road-controler.php';
                                    $controler_rout = new RouteController();
                                    $controler_rout->indexRout();
                                    break;
                                    case 'delet_rout':
                                        require_once 'Controller\road-controler.php';
                                        $controler_rout = new RouteController();
                                        $controler_rout->indexRout();
                                        break;
                           
                                    case 'serch':
                                        $departureCity = isset($_GET['departureCity']) ? $_GET['departureCity'] : null;
                                        $arrivalCity = isset($_GET['arrivalCity']) ? $_GET['arrivalCity'] : null;
                                        $travelDate = isset($_GET['date_trip']) ? $_GET['date_trip'] : null;
                                        $numPeople = isset($_GET['num_papl']) ? $_GET['num_papl'] : null;
                                        
                                            
                                        require_once 'Controller\scheduel_control.php';
                                        $controler_sched = new Controler_schet();
                                        $controler_sched->get_scheduel_serch($departureCity,$arrivalCity,$travelDate,$numPeople);
                                            

                                       
                                        break;
                                        case'filter':
                                            $departureCity = isset($_GET['starcity']) ? $_GET['starcity'] : null;
                                            $arrivalCity = isset($_GET['endcity']) ? $_GET['endcity'] : null;
                                            $travelDate = isset($_GET['date']) ? $_GET['date'] : null;
                                            $numPeople = isset($_GET['num_prpl']) ? $_GET['num_prpl'] : null;
                                            $priceFilter = isset($_GET['by_price']) ? true : false;
                                            $busNameFilter = isset($_GET['bus_name']) ? $_GET['bus_name'] : null;
                                            $companyNameFilter = isset($_GET['company_name']) ? $_GET['company_name'] : null;
                                            require_once 'Controller\scheduel_control.php';
                                            $controler_sched = new Controler_schet();
                                            $controler_sched->get_scheduel_filred($departureCity,$arrivalCity,$travelDate,$numPeople,$priceFilter,$busNameFilter,$companyNameFilter);
                                            break;
                               
    

    // Add more cases as needed

    default:
 
        // Handle default case if needed
        break;
}

}else {
    require_once 'Controller\controler_ville.php';
    $controlerville = new Controler_ville();
    $controlerville->get_ville_ville();
}
?>
