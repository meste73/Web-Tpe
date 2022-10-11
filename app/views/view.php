<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class View{

        private $smarty;

        function __construct($sectors){
            $this->smarty = new Smarty();
            $this->smarty->assign('BASE_URL', BASE_URL);
            $this->smarty->assign('sectors', $sectors);
            
        }

        function showHome($name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->display('templates/home.tpl');
        }

        function showAbout($name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->display('templates/about.tpl');
        }

        function showFound($work, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('work', $work);
            $this->smarty->display('templates/workTable.tpl');
        }

        function showWorks($works, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('works', $works);
            $this->smarty->display('templates/worksTable.tpl');
        }

        function showSectors($name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->display('templates/sectorsTable.tpl');
        }

        function showUpdateForm($work, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('work', $work);
            $this->smarty->display('templates/updateWorkForm.tpl');
        }

        function showUpdateGarageForm($sector, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('sector', $sector);
            $this->smarty->display('templates/updateGarageForm.tpl');
        }

        function showError($error, $name = null){
            $this->smarty->assign('name', $name);
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/error.tpl');
        }
    }
    
    