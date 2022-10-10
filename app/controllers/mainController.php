<?php

    include 'app/models/mainModel.php';
    include 'app/models/garageModel.php';
    include 'app/models/authModel.php';
    include 'app/models/worksModel.php';
    include 'app/views/view.php';

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
            $this->view = new View();
            session_start();
            $this->sectors = $this->garageModel->getAll();
            $this->setName();
        }

        protected function checkLoggedIn(){
            if(empty($_SESSION['name'])){
                header('Location: ' . BASE_URL);
                die();
            }
        }

        private function setName(){
            if(isset($_SESSION['name']))
            $this->name = $_SESSION['name'];
        }
    }