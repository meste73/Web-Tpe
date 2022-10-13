<?php

    require_once 'app/models/MainModel.php';
    require_once 'app/models/GarageModel.php';
    require_once 'app/models/AuthModel.php';
    require_once 'app/models/WorksModel.php';
    require_once 'app/views/MainView.php';
    require_once 'app/views/GarageView.php';
    require_once 'app/views/UserView.php';
    require_once 'app/views/WorksView.php';

    class MainController{

        protected $worksModel;
        protected $garageModel;
        protected $authModel;
        protected $garageView;
        protected $userView;
        protected $worksView;
        protected $sectors;
        protected $name;


        function __construct(){
            session_start();
            $this->setName();
            $this->worksModel = new WorksModel();
            $this->garageModel = new GarageModel();
            $this->authModel = new AuthModel();
            $this->sectors = $this->garageModel->getAll();
            $this->garageView = new GarageView($this->sectors, $this->name);
            $this->userView = new UserView($this->sectors, $this->name);
            $this->worksView = new WorksView($this->sectors, $this->name);
        }

        //wall function for admin.
        protected function checkLoggedIn(){
            if(empty($_SESSION['name'])){
                header('Location: ' . BASE_URL);
                die();
            }
        }

        //set function, only used by this controller.
        private function setName(){
            if(isset($_SESSION['name']))
            $this->name = $_SESSION['name'];
        }
    }