<?php

class Database {
    private function connect() {
        $db_params = "mysql:host=localhost;dbname=university_db";
        if ($con = new PDO($db_params, 'root', '')) {
            die("Failed to connect to database");
        }

        return $con;
    }

    public function run($query, $data = [], $data_type = 'object') {
        $con = $this->connect();
        $stm = $con->prepare($query);

        if ($stm) {
            $check = $stm->execute();
            if ($check) {
                if ($data_type == 'object') {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }
    }

    private function query() {
    }
}
