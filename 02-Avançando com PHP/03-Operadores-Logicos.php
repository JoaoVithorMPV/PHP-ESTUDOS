<?php

$media_minima = 7;
$frequencia_minima = 75;

$media_aluno = 8;
$frequencia_aluno = 50;

/*
//Para ser aprovado nessa escola é necessário apenas passar em um dos requesitos, média ou frequencia 
if($media_aluno >= $media_minima || $frequencia_aluno >= $frequencia_minima){
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}*/




/*if($media_aluno >= $media_minima && $frequencia_aluno >= $frequencia_minima) {
    echo "Aprovado!";    
} else {
    echo"Reprovado!";
}*/

$chovendo = true;

if (!$chovendo) {
    echo "Vou ficar em casa!";
} else {
echo "Vou pra piscina!";
}