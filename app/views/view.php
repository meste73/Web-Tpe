<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class View{

        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('BASE_URL', BASE_URL);
        }

        function showHome($sectors, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->display('templates/home.tpl');
        }

        function showAbout($sectors, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->display('templates/about.tpl');
        }

        function showFound($work, $sectors, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('work', $work);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->display('templates/workTable.tpl');
        }

        function showWorks($works, $sectors, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('works', $works);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->display('templates/worksTable.tpl');
        }

        function showSectors($sectors, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->display('templates/sectorsTable.tpl');
        }

        function showUpdateForm($work, $sectors, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('work', $work);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->display('templates/updateWorkForm.tpl');
        }

        function showUpdateGarageForm($sector, $sectors, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('sector', $sector);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->display('templates/updateGarageForm.tpl');
        }

        function showError($error, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/error.tpl');
        }
    }
    
    