<?php

    Class UserController extends MainController {

        function showHomeView(){
            $this->view->showHome($this->name);
        }

        function showAboutView(){
            $this->view->showAbout($this->name);
        }

        function showError($error){
            $this->view->showError($error, $this->name);
        }
    }