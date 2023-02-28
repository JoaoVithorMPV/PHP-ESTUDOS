<?php

/*echo $_GET['planeta'];
echo "<br>";
echo $_GET['cor'];*/

$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false) {
    echo $planeta;
} else {
    echo "planeta não informado";
}

//echo "<br>";

//$cor = $_GET['cor'] ?? 'cor não informada';
//    echo $cor; 