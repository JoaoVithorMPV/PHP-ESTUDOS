<html>
    <head>
        <title>Lista de Planetas</title>
    </head>
    <body>
        <?php
        $planetas = [
            "Mercurio",
            "Venus",
            "Terra",
            "Marte",
            "Jupiter",
            "Saturno",
            "Urano",
            "Netuno"
            ];
            ?>

            <ul>
                <?php foreach($planetas as $planeta):?>
                <li>
                    <a href="08-get.php?planeta=<?php echo $planeta?>"><?php echo $planeta?><a>
                </li>
            <?php endforeach;?>
            </ul>
            
    </body>
</html>