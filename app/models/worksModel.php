<?php

    class WorksModel extends MainModel{

        function getAll(){
            $query = $this->db->prepare('SELECT works.id, works.work_name, works.work_description, works.client_name, works.work_id, works.work_status, garage.area, garage.manager FROM works JOIN garage ON works.fk_id = garage.id');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function getWorksBySector($fk_id){
            $query = $this->db->prepare('SELECT works.id, works.work_name, works.work_description, works.client_name, works.work_id, works.work_status, garage.area, garage.manager FROM works JOIN garage ON works.fk_id = garage.id WHERE fk_id = ?');
            $query->execute([$fk_id]);
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        function getWorkById($id){
            $query = $this->db->prepare('SELECT id, work_name, work_description, client_name, work_id, work_status, fk_id  FROM works WHERE id = ?');
            $query->execute([$id]);
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function getWorkByWorkId($work_id){
            $query = $this->db->prepare('SELECT id, work_name, work_description, client_name, work_id, work_status, fk_id  FROM works WHERE work_id = ?');
            $query->execute([$work_id]);
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function getWorkAndSectorByWorkId($workId){
            $query = $this->db->prepare('SELECT works.work_name, works.work_description, works.client_name, works.work_id, works.work_status, garage.area, garage.manager FROM works JOIN garage ON works.fk_id = garage.id WHERE works.work_id = ?');
            $query->execute([$workId]);
            return $query->fetch(PDO::FETCH_OBJ);
        }

        function addWork($workName, $workDescription, $clientName, $workId, $workStatus, $area){
            $query = $this->db->prepare('INSERT INTO works ( work_name, work_description, client_name, work_id, work_status, fk_id ) VALUES ( ?, ?, ?, ?, ?, ?)');
            $query->execute([$workName, $workDescription, $clientName, $workId, $workStatus, $area]);
        }

        function deleteWork($id){
            $query = $this->db->prepare('DELETE FROM works WHERE id = ?');
            $query->execute([$id]);
        }

        function updateWork($id, $workName, $workDescription, $clientName, $work_id, $workStatus, $area){
            $query = $this->db->prepare('UPDATE works SET work_name = ? , work_description = ? , client_name = ? , work_id = ? , work_status = ? , fk_id = ? WHERE id = ?');
            $query->execute([$workName, $workDescription, $clientName, $work_id, $workStatus, $area, $id]);
        }

    }