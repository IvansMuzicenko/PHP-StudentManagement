<?php

require "config.php";
require "database.php";
require "app.php";
require "model.php";
require "controller.php";

spl_autoload_register(function ($class_name) {
    require "../private/models/" . ucfirst($class_name) . ".php";
});
