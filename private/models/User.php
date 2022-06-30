<?php

class User extends Model {
    protected $beforeInsert = [
        "make_user_id",
        "make_school_id",
        "hash_password",
    ];
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'gender',
        'rank',
        'password',
        'date'
    ];

    public function validate($DATA) {
        $this->errors = [];


        if (empty($DATA['firstname'])) {
            $this->errors['firstname'] = "Please provide a firstname";
        } else if (!preg_match("/^[a-zA-Z]+$/", $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name";
        }

        if (empty($DATA['lastname'])) {
            $this->errors['lastname'] = "Please provide a lastname";
        } else if (!preg_match("/^[a-zA-Z]+$/", $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in lastname";
        }

        if (empty($DATA['email'])) {
            $this->errors['email'] = "Please provide a email";
        } else if (!filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        if (empty($DATA['gender'])) {
            $this->errors['gender'] = "Please provide a gender";
        }

        if (empty($DATA['rank'])) {
            $this->errors['rank'] = "Please provide a rank";
        }

        if (empty($DATA['password']) || empty($DATA['password2'])) {
            $this->errors['password'] = "Passwords must not be empty";
        } else if (strlen($DATA['password']) < 8 || strlen($DATA['password2']) < 8) {
            $this->errors['password'] = "Password must be at least 8 characters long";
        } else if ($DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "Passwords do not match";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data) {
        $data['user_id'] = $this->random_string(60);
        return $data;
    }
    public function make_school_id($data) {
        if (isset($_SESSION["USER"]->school_id)) {
            $data['school_id'] = $_SESSION["USER"]->school_id;
        }
        return $data;
    }
    public function hash_password($data) {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    private function random_string($length) {
        $symbols = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $result .= $symbols[$random];
        }
        return $result;
    }
}
