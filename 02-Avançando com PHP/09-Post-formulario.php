<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <h1>Formulário com PHP</h1>
        <hr>
        <form action="09.1-Recebe_Formulario.php" method="post">
            <label for="">Nome</label>
            <br>
            <input type="text" name="nome">
            <br><br>

            <label for="">E-mail</label>
            <br>
            <input type="text" name="email">
            <br><br>
            
            <fieldset>
                <legend>Área de Interesse</legend>
                <input type="checkbox" name="interesse[]" id="" value="informatica"> Infomática <br>
                <input type="checkbox" name="interesse[]" id="" value="esporte"> Esporte <br>
                <input type="checkbox" name="interesse[]" id="" value="compras"> Compras <br>
                <input type="checkbox" name="interesse[]" id="" value="moda"> Moda <br>
                <input type="checkbox" name="interesse[]" id="" value="ciencia"> Ciência <br>
                <input type="checkbox" name="interesse[]" id="" value="religiao"> Religião <br>
            </fieldset>
            <br>

            <label for="">Onde Conheceu?</label>
            <br>
            <select name="onde_conheceu" id="">
                <option value="">Selecione</option>
                <option value="google">Google</option>
                <option value="Amigos">Amigos</option>
                <option value="Tv">Tv</option>
            </select>
            <br><br>

            <label for="">Mensagem</label>
            <br>
            <textarea name="mensagem" cols="30" rows="10"></textarea>
            <br><br>

            <fieldset>
                <legend>Redirecionar para:</legend>
                <input type="radio" name="redirecionar" id="" value="home"> Home <br>
                <input type="radio" name="redirecionar" id="" value="contado"> Contato <br>
            </fieldset>

            <hr>

            <button type="submit">Enviar</button>
    </body>
</html>

