<?php

    class GarageView extends MainView{

        

        function showSectors(){
            $this->smarty->display('templates/sectorsTable.tpl');
        }

        function showUpdateGarageForm($sector){
            $this->smarty->assign('sector', $sector);
            $this->smarty->display('templates/updateGarageForm.tpl');
        }

    }