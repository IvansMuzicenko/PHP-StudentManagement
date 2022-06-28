<?php

class Home extends Controller {
    function index() {
        $user = new User();
        $data = $user->findAll();

        $this->view('home', ["title" => 'Home', "rows" => $data]);
    }
}
