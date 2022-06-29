<?php

class User extends Model {
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
        } else if ($DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "Passwords do not match";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}
