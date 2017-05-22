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
                <h3>
                    <?= @$_GET['error'] ?>
                </h3>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="login[email]" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Haslo</label>
                        <input type="password" class="form-control" name="login[haslo]" id="pwd">
                    </div>

                    <button type="submit" class="btn btn-default">Loguj</button>

                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </body>
</html>

