<?php

require __DIR__.'/06.3-manipulador.php';

$user = $_SESSION['user'] ?? null;

if (!$user) {
    header('location: 05.1-login.php');
    exit;
}

?>

<h1>Dentro do Site</h1>

<p>Olá, <?php echo $user['email'];?></p>