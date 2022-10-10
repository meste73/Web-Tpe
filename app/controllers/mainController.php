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

        function __construct(){
            $this->worksModel = new WorksModel();
            $this->garageModel = new GarageModel();
            $this->authModel = new AuthModel();
            $this->view = new View();
            $this->sectors = $this->garageModel->getAll();
            session_start();
        }

        protected function checkLoggedIn(){
            if(empty($_SESSION['name'])){
                header('Location: ' . BASE_URL);
                die();
            }
        }
    }