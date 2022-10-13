<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

    class MainView{

        protected $smarty;

        function __construct($sectors, $name = null){
            $this->smarty = new Smarty();
            $this->smarty->assign('BASE_URL', BASE_URL);
            $this->smarty->assign('sectors', $sectors);
            $this->smarty->assign('name', $name);
            
        }

    }