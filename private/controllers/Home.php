<?php

class Home extends Controller {
    function index() {
        $this->view('home',["title" => 'Home']);
    }
}
