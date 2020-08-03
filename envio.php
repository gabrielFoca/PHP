<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <form action="script.php" method="post">
        <fieldset>
            <legend>Envio de sugestão</legend>
            <label for="assunto">
                Assunto
                <input type="text" name="assunto" placeholder="Digite o assunto">
            </label><br><br>

            <label for="nome">
                Nome
                <input type="text" name="nome" placeholder="Digite seu nome completo">
            </label><br><br>

            <label for="email">
                E-mail
                <input type="text" name="email" placeholder="Digite o seu email">
            </label><br><br>

            <label for="mensagem">
                Mensagem<br>
                <textarea name="mensagem" id="" cols="30" rows="10" placeholder="Digite a sua mensagem"></textarea>
            </label><br><br>

            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    
    </form>
    
</body>
</html>