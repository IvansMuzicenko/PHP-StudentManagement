<?php

class Schools extends Controller {
    public function index() {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $school = new School();
        $data = $school->findAll();


        $this->view('schools', ["title" => 'Schools', "rows" => $data]);
    }
    public function add() {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $errors = [];

        if (count($_POST) > 0) {
            $school = new School();
            if ($school->validate($_POST)) {

                $_POST['date'] = date("Y-m-d H:i:s");

                $school->insert($_POST);
                $this->redirect('schools');
            } else {
                $errors = $school->errors;
            }
        }



        $this->view('schools.add', ["title" => 'Schools', "errors" => $errors]);
    }
}
