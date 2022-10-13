<?php

    class WorksView extends MainView{

        
        
        function showWorks($works){
            $this->smarty->assign('works', $works);
            $this->smarty->display('templates/worksTable.tpl');
        }

        function showUpdateForm($work){
            $this->smarty->assign('work', $work);
            $this->smarty->display('templates/updateWorkForm.tpl');
        }

    }