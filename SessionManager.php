<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionManager
 *
 * @author Damian Stępniak
 */
class SessionManager {

    public function __construct() {
        session_start();
    }

    public function startSession() {
        if (session_status() != PHP_SESSION_NONE) {
            session_destroy();
        }

        session_start();
    }

    public function destroy() {
        if (session_status() != PHP_SESSION_NONE) {
            session_destroy();
        }
    }

    public function setSessionValue($key, $value) {
        $_SESSION[$key] = $value;

        return $_SESSION;
    }

    public function getSessionValue($key) {
        return $_SESSION[$key];
    }

    public function getSession() {
        return $_SESSION;
    }

    public function isIdentyficate() {

        if (empty($this->getSessionValue("Auth"))) {
            return false;
        }

        return true;
    }

}
