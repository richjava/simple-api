<?php
//Matt
class User {
    public $user_id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $email;
    function getUser_id() {
        return $this->user_id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getEmail() {
        return $this->email;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
//End Matt 