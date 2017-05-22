<?php

include_once './dbManage.php';
include_once './SessionManager.php';
include_once './User.php';

$login = $_POST['login'];

if (empty(filter_var($login['email'], FILTER_VALIDATE_EMAIL)) || empty($login['haslo'])) {
    header("Location: login.html.php?error=Błędne parametry");
    return 0;
}

$select = new dbManage(new dbConnect('user'));

$select->setQuery("SELECT * from login where email = :email AND haslo = :haslo");
$select
        ->setValue(":email", filter_var($login['email'], FILTER_SANITIZE_STRING))
        ->setValue(":haslo", filter_var($login['haslo'], FILTER_SANITIZE_STRING))
        ->execude();

$data = $select->getStm()->fetchAll(PDO::FETCH_ASSOC);

if (empty($data)) {
    header("Location: login.html.php?error=Użytkownik Nie znaleziony");
    return 0;
}

$session = new SessionManager();
$session->startSession();
$session->setSessionValue("Auth", new User($data[0]));

header("Location: index_admin.php?message='Pomyslnie Zalogowano'");





