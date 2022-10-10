<?php

    Class UserController extends MainController {

        function showHomeView(){
            $this->view->showHome($this->sectors, $this->name);
        }

        function showAboutView(){
            $this->view->showAbout($this->sectors, $this->name);
        }

        function showError($error){
            $this->view->showError($error);
        }
    }