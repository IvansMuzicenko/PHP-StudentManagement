<?php

class Profile extends Controller {
    function index() {
        $this->view('profile', ["title" => 'Profile']);
    }
}
