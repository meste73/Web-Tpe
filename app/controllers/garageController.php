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
                $this->userView->showError("El sector ya existe", $this->name);
            }
        }

        function deleteSector($id) {
            $this->checkLoggedIn();
            $name = $this->garageModel->getSectorById($id)->area;
            //delete if sector has not contain works, otherwise show an error message.
            if (!$this->sectorHasWorks($id)){
                $this->garageModel->deleteSector($id);
                header("Location: " . BASE_URL . "sectors");
            } else {
                $this->userView->showError("Error de eliminacion, el sector ".$name." contiene trabajos.");
            }
        }

        //update function, first step: get and show sector in form.
        function updateSector($id) {
            $this->checkLoggedIn();
            //get sector for updating.
            $sector = $this->garageModel->getSectorById($id);
            $this->garageView->showUpdateGarageForm($sector, $this->name);
        }

        //update function, second step: send data to db.
        function sectorUpdated($id) {
            $this->checkLoggedIn();
            $area = $_POST['area'];
            $manager = $_POST['manager'];
            //update if area does not exists in any sector.
            if(!$this->garageModel->getSectorByArea($area)){
                $this->garageModel->updateSector($id, $area, $manager);
                header("Location: " . BASE_URL . "sectors");
            } else{
                $this->userView->showError("Error de modificacion, el sector ".$area." ya existe.");
            }
        }

        function sectorHasWorks($id){
            return $this->worksModel->getWorksBySector($id);
        }

        function showSectors(){
            $this->garageView->showSectors($this->name);
        }

    }
