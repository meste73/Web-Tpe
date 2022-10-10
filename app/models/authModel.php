<?php

    class AuthModel extends MainModel{

        function getUser($email){
            $query = $this->db->prepare('SELECT * FROM administrator WHERE email = ?');
            $query->execute([$email]);
            return $query->fetch(PDO::FETCH_OBJ);
        }
    }