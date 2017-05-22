
<?php
include_once './SessionManager.php';
include_once './User.php';

$session = new SessionManager();
if (!$session->isIdentyficate()) {
    header("Location: login.html.php?error=Dostęp dla zalogowanych");
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h1><?= @$_GET['message'] ?></h1>
                <h2>Witaj <?= $session->getSession()['Auth']->getEmail() ?></h2>
                <h1>
                    <a href="logout.php">Wyloguj</a>
                </h1>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </body>
</html>

