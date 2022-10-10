<?php

    Class UserController extends MainController {

        function showHomeView(){
            if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                $this->view->showHome($this->sectors, $name);
            } else{
                $this->view->showHome($this->sectors);
            }
        }

        function showAboutView(){
            if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                $this->view->showAbout($this->sectors, $name);
            }else{
                $this->view->showAbout($this->sectors);
            }
        }

        function showError($error){
            $this->view->showError($error);
        }
    }