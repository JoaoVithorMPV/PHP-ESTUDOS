<?php

 $nome = trim($_POST['nome']);

 if(empty($nome)){
    echo "Infome o seu Nome!<br>";
 }



 $email = trim($_POST['nome']);

 if(empty($email)){
    echo "informe o seu email, por favor!<br>";
 }

 $interesses = $_POST ['interesse'] ?? null;

 if(is_null($interesses)) {
    echo 'Selecione pelo menos uma das opções!<br>';
 }
 
 $mensagem = strip_tags($_POST['mensagem']);

 echo $mensagem; 