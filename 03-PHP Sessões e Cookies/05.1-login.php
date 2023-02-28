<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user'] = [
        'email' => filter_input(INPUT_POST, 'email')
    ];

    header('location: 05-Login_basico_inside.php');
    exit;
}


?>

<h1>Login</h1>

<form action="" method="post">
    <input type="text" name="email">
    <input type="submit" value="enviar">
</form>