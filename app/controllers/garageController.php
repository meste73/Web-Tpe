<?php

    class GarageController extends MainController{

        function addSector(){
            $this->checkLoggedIn();
            $area = $_POST['area'];
            $manager = $_POST['manager'];
            $sector = $this->garageModel->getSectorByArea($area);
            //check if sector already exists.
            if (!$sector) {
                $this->garageModel->addSector($area, $manager);
                header("Location: " . BASE_URL . "sectors");
            } else {
                $this->view->showError("El sector ya existe", $this->name);
            }
        }

        function deleteSector($id) {
            $this->checkLoggedIn();
            $this->garageModel->deleteSector($id);
            header("Location: " . BASE_URL . "sectors");
        }

        //update function, first step: get and show sector in form.
        function updateSector($id) {
            $this->checkLoggedIn();
            //get sector for updating.
            $sector = $this->garageModel->getSectorById($id);
            $this->view->showUpdateGarageForm($sector, $this->name);
        }

        //update function, second step: send data to db.
        function sectorUpdated($id) {
            $this->checkLoggedIn();
            $area = $_POST['area'];
            $manager = $_POST['manager'];
            $this->garageModel->updateSector($id, $area, $manager);
            header("Location: " . BASE_URL . "sectors");
        }
    }
