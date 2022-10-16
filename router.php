<?php

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' .$_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    require_once 'app/controllers/MainController.php';
    require_once 'app/controllers/UserController.php';
    require_once 'app/controllers/WorkController.php';
    require_once 'app/controllers/GarageController.php';
    require_once 'app/controllers/AuthController.php';

    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }
    
    $params = explode('/', $action);

    switch($params[0]){
        case 'home':
            $userController = new UserController();
            $userController->showHomeView();
            break;

        case 'works':
            $workController = new WorkController();
            if(!isset($params[1]))
                $workController->showAllWorks();
            else{
                $workController->showWorksBySector($params[1]);
            }
            break;

        case 'sectors':
            $garageController = new GarageController();
            $garageController->showSectors();
            break;
        
        case 'about':
            $userController = new UserController();
            $userController->showAboutView();
            break;

        case 'detail':
            $workController = new WorkController();
            if(isset($_POST['searchInput']))
                $work_id = $_POST['searchInput'];
            else{
                $work_id = $params[1];
            }
            $workController->showWorkByWorkId($work_id);
            break;
        
        //Auth Validation
        case 'login':
            $authController = new AuthController();
            $authController->login();
            break;

        case 'logout':
            $authController = new AuthController();
            $authController->logout();
            break;
        
        //Crud Works
        case 'addWork':
            $workController = new WorkController();
            $workController->addWork();
            break;

        case 'deleteWork':
            $workController = new WorkController();
            if(isset($params[1]))
                $workController->deleteWork($params[1]);
            break;

        case 'updateWork':
            $workController = new WorkController();
            if(isset($params[1]))
                $workController->updateWork($params[1]);
            break;

        case 'updatedWork':
            $workController = new WorkController();
            if(isset($params[1]))
                $workController->updatedWork($params[1]);
            break;
        
        //Crud Sectors
        case 'addSector':
            $garageController = new GarageController();
            $garageController->addSector();
            break;

        case 'deleteSector':
            $garageController = new GarageController();
            if(isset($params[1]))
                $garageController->deleteSector($params[1]);
            break;

        case 'updateSector':
            $garageController = new GarageController();
            if(isset($params[1]))
                $garageController->updateSector($params[1]);
            break;

        case 'sectorUpdated':
            $garageController = new GarageController();
            if(isset($params[1]))
                $garageController->sectorUpdated($params[1]);
            break;

        default:
            $userController = new UserController();
            $userController->showError("Error 404, page not found.");
    }