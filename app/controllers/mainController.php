<?php

    require_once 'app/models/mainModel.php';
    require_once 'app/models/garageModel.php';
    require_once 'app/models/authModel.php';
    require_once 'app/models/worksModel.php';
    require_once 'app/views/view.php';

    class MainController{

        protected $worksModel;
        protected $garageModel;
        protected $authModel;
        protected $view;
        protected $sectors;
        protected $name;


        function __construct(){
            $this->worksModel = new WorksModel();
            $this->garageModel = new GarageModel();
            $this->authModel = new AuthModel();
            $this->sectors = $this->garageModel->getAll();
            $this->view = new View($this->sectors);
            session_start();
            $this->setName();
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