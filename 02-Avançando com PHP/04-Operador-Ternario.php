<?php

$media_minima = 7;
$media_recuperação = 5;
$frequencia_minima = 70;

$media_aluno = 6;
$frequencia_aluno = 70;

$reprovado_por_faltas = $frequencia_aluno < $frequencia_minima ? true : false;

if (!$reprovado_por_faltas) {

    if ($media_aluno < $media_recuperação) {
        echo "Reprovado!";
    }   else if ($media_aluno < $media_minima) {
        echo "Recuperação!";
        } else {
            echo "Aprovado!";
        }
    
    } else {
        echo "Reprovado por Faltas";
    }