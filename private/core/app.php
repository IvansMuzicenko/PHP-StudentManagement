<?php


class App {
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $URL = $this->getURL();
        if (file_exists("../private/controllers/" . $URL[0] . ".php")) {
            $this->controller = $URL[0];
        }
        require "../privete/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();
    }

    public function getURL() {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $url = trim($url, "/");
        $url = filter_var($url, FILTER_SANITIZE_URL);

        return explode('/', $url);
    }
}
