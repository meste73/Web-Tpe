<?php

    Class UserController extends MainController {

        function showHomeView(){
            $this->userView->showHome();
        }

        function showAboutView(){
            $this->userView->showAbout($this->name);
        }

        function showError($error){
            $this->userView->showError($error, $this->name);
        }
    }