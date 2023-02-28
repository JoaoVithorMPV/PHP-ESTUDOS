<?php

session_start();


$_SESSION['usuario'] = [
    'nome' => 'Joaoi',
    'idade' => 19,
    'ativo' => true,
    'rate' => 4.3
 ];
 

 //unset($_SESSION['usuario']);