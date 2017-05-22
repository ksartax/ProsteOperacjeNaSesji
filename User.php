<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Damian Stępniak
 */
class User {

    private $id;
    private $email;
    private $haslo;

    function __construct($array) {
        foreach ($array as $key => $value) {
            $this->$key = $value;
        }
    }

    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getHaslo() {
        return $this->haslo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setHaslo($haslo) {
        $this->haslo = $haslo;
    }

}
