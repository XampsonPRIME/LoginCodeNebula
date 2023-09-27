<?php session_start() ?>
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="/style.css">
    <title>login</title>
</head>
<body>

<div class="controler-login">
    <?php

    if (!isset($_SESSION['login'])) {

        if (isset($_POST['sub'])) {
            $logion = 'pedro';
            $pass = '123456';

            $loginForm = $_POST['login'];
            $passForm = $_POST['pass'];

            if ($logion == $loginForm && $pass == $passForm) {
                $_SESSION['login'] = true;
                header('location: index.php');
            } else {
                echo 'Erro ao envio';
            }
        }

        include('login.php');
    } else {
        if (isset($_GET['logout'])) {
            unset($_SESSION['login']);
            session_destroy();
            header('Location: index.php');
        }
        include('home.php');
    }

    ?>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

</body>
</html>