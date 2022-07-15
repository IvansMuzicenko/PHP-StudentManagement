<?php

function get_var($key) {
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    return '';
}
function get_select($key, $value) {
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value) {
            return "selected";
        }
    }
    return '';
}
function esc($var) {
    return htmlspecialchars($var);
}

function random_string($length) {
    $symbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $result = '';

    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, 61);
        $result .= $symbols[$random];
    }
    return $result;
}
