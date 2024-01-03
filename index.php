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
                           
                                    case 'search':
                                        extract($_POST); 
                                           session_start();
                                           
                                            $_SESSION['departcity']=$departureCity;
                                            $_SESSION['arivcity']=$arrivalCity;
                                            $_SESSION['date']=$date_trip;
                                            $_SESSION['num_papl']=$num_papl;

                                           
                                        
                                        require_once 'Controller\scheduel_control.php';
                                        $controler_sched = new Controler_schet();
                                        
                                        $controler_sched->get_scheduel_serch($departureCity,$arrivalCity,$date_trip,$num_papl);
                                        
                                        
                                        break;
                                        case 'get_filter':
                                            require_once 'Controller\scheduel_control.php';

                                            $controler_sched = new Controler_schet();
                                            $comp_bus_slct= $controler_sched->get_comp_select();
                                            include 'view\form_serach.php';
                                            break;
                                        case'filter':
                                            session_start();
                                            $departureCity=   $_SESSION['departcity'];
                                            $arrivalCity=   $_SESSION['arivcity'];
                                            $date_trip= $_SESSION['date'];
                                            $num_papl=  $_SESSION['num_papl'];
                                           
                                          require_once 'Controller\scheduel_control.php';
                                      
                                          $controler_sched = new Controler_schet();
                                          $controler_sched->get_scheduel_filred($departureCity,$arrivalCity,$date_trip,$num_papl);
                                          break;
                                 case 'add_scheduel':
                                    require_once 'Controller\scheduel_control.php';
                                    $controler_sched = new Controler_schet();
                                    $route= $controler_sched->get_citys();
                                    $bus_name= $controler_sched->get_comp_select();
                                    require_once 'view\schedule\add.php';

                                      
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
