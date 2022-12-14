<?php

    class WorkController extends MainController{

        function addWork(){
            $this->checkLoggedIn();
            $workName = $_POST['work_name'];
            $workDescription = $_POST['work_description'];
            $clientName = $_POST['client_name'];
            $work_id = $_POST['work_id'];
            $workStatus = $_POST['work_status'];
            $area = $_POST['area'];
            $work = $this->worksModel->getWorkByWorkId($work_id);
            //check if work already exists.
            if(!$work){
                $this->worksModel->addWork($workName, $workDescription, $clientName, $work_id, $workStatus, $area);
                header("Location: " . BASE_URL. "works");
            }
            else{
                $this->userView->showError("El numero de trabajo ya existe", $this->name);
            }
        }
        

        function deleteWork($id){
            $this->checkLoggedIn();
            $this->worksModel->deleteWork($id);
            header("Location: " . BASE_URL. "works");
        }
        
        //update function, first step: get and show work in form.
        function updateWork($id){
            $this->checkLoggedIn();
            $work = $this->worksModel->getWorkById($id);
            $this->worksView->showUpdateForm($work, $this->name);
        }
        
        //update function, second step: send data to db.
        function updatedWork($id){
            $this->checkLoggedIn();
            $workName = $_POST['work_name'];
            $workDescription = $_POST['work_description'];
            $clientName = $_POST['client_name'];
            $work_id = $_POST['work_id'];
            $workStatus = $_POST['work_status'];
            $area = $_POST['area'];
            //update if work_id does not exists in any work.
            if(!$this->worksModel->getWorkByWorkId($work_id)){
                $this->worksModel->updateWork($id, $workName, $workDescription, $clientName, $work_id, $workStatus, $area);
                header("Location: " . BASE_URL. "works");
            } else{
                $this->userView->showError("El numero de trabajo " .$work_id. " ya existe");
            }
        }

        function showAllWorks(){
            $works = $this->worksModel->getAll();
            $this->worksView->showWorks($works, $this->name);
        }

        function showWorksBySector($sector_fk){
            $works = $this->worksModel->getWorksBySector($sector_fk);
            $sector = $this->garageModel->getSectorById($sector_fk);
            if($works){
                $this->worksView->showWorks($works, $this->name);
            } else {
                $this->userView->showError("No hay trabajos, sector no encontrado.");
            }
        }

        function showWorkByWorkId($id){
            $work = $this->worksModel->getWorkAndSectorByWorkId($id);
            if($work)
            $this->userView->showFound($work, $this->name);
            else 
            $this->userView->showError("El codigo de trabajo ingresado no es valido.", $this->name);
        }

    }





