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
            if(!$work){
                $this->worksModel->addWork($workName, $workDescription, $clientName, $work_id, $workStatus, $area);
                header("Location: " . BASE_URL. "works");
            }
            else{
                $this->view->showError("El numero de trabajo ya existe");
            }
        }
        
        function deleteWork($id){
            $this->checkLoggedIn();
            $this->worksModel->deleteWork($id);
            header("Location: " . BASE_URL. "works/all");
        }
        
        function updateWork($id){
            $this->checkLoggedIn();
            $work = $this->worksModel->getWorkById($id);
            $this->view->showUpdateForm($work, $this->sectors);
        }
        
        function updatedWork($id){
            $this->checkLoggedIn();
            $workName = $_POST['work_name'];
            $workDescription = $_POST['work_description'];
            $clientName = $_POST['client_name'];
            $work_id = $_POST['work_id'];
            $workStatus = $_POST['work_status'];
            $area = $_POST['area'];
            $this->worksModel->updateWork($id, $workName, $workDescription, $clientName, $work_id, $workStatus, $area);
            header("Location: " . BASE_URL. "works/all");
        }

        function showAllWorks(){
            $works = $this->worksModel->getAll();
            if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                $this->view->showWorks($works, $this->sectors, $name);
            } else {
                $this->view->showWorks($works, $this->sectors);
            }
        }

        function showWorksBySector($sector){
            $works = $this->worksModel->getWorksBySector($sector);
            if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                $this->view->showWorks($works, $this->sectors, $name);
            } else {
                $this->view->showWorks($works, $this->sectors);
            }
        }

        function showWorkByWorkId($id){
            $work = $this->worksModel->getWorkAndSectorByWorkId($id);
            if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                if($work)
                $this->view->showFound($work, $this->sectors, $name);
                else 
                $this->view->showError("El codigo de trabajo ingresado no es valido.", $name);
            } else {
                if($work)
                $this->view->showFound($work, $this->sectors);
                else 
                $this->view->showError("El codigo de trabajo ingresado no es valido.");
            }
        }

        function showSectors(){
            if(isset($_SESSION['name'])){
                $name = $_SESSION['name'];
                $this->view->showSectors($this->sectors, $name);
            } else {
                $this->view->showSectors($this->sectors);
            }
        }
    }




