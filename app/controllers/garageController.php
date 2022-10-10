<?php

    class GarageController extends MainController{

        function addSector(){
            $this->checkLoggedIn();
            $area = $_POST['area'];
            $manager = $_POST['manager'];
            $sector = $this->garageModel->getSectorByArea($area);
            if (!$sector) {
                $this->garageModel->addSector($area, $manager);
                header("Location: " . BASE_URL . "sectors");
            } else {
                $this->view->showError("El sector ya existe");
            }
        }

        function deleteSector($id) {
            $this->checkLoggedIn();
            $this->garageModel->deleteSector($id);
            header("Location: " . BASE_URL . "sectors");
        }

        function updateSector($id) {
            $this->checkLoggedIn();
            $sector = $this->garageModel->getSectorById($id);
            $this->view->showUpdateGarageForm($sector);
        }

        function sectorUpdated($id) {
            $this->checkLoggedIn();
            $area = $_POST['area'];
            $manager = $_POST['manager'];
            $this->garageModel->updateSector($id, $area, $manager);
            header("Location: " . BASE_URL . "sectors");
        }
    }
