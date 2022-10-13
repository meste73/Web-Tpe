<?php

class UserView extends MainView{

        

        function showHome(){
            $this->smarty->display('templates/home.tpl');
        }

        function showAbout(){
            $this->smarty->display('templates/about.tpl');
        }

        function showFound($work){

            $this->smarty->assign('work', $work);
            $this->smarty->display('templates/workTable.tpl');
        }

        function showError($error){
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/error.tpl');
        }
    }
    
    