<html lang="sk-SK">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<?php
$conn = "";
require_once "config.php";
?>

<div class="jumbotron">
    <h1 class="display-4">Rezervačný systém pre <b>coworking MTF</b></h1>
    <p class="lead">Vitajte</p>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <h3>Registrujte sa!</h3>
            <form class="form-group" method="post">
                <label>Prihlasovacie meno</label>
                <input class="form-control form-control-lg" type="text" name="username">
                <br>
                <label>Heslo:</label>
                <input class="form-control form-control-lg" type="password" name="pass">
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>