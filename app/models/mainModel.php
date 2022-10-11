<?php

    class MainModel{

        protected $db;

        function __construct(){
            $this->db = $this->connect();
        }

        private function connect(){
            return new PDO('mysql:host=localhost;'.'dbname=tpe_db;charset=utf8','root', '');
        }
    }