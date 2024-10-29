<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>
    <form method="POST">
        <p>Digite sua idade</p>
        <input type="number" name="nome" placeholder="digite o seu nome" require>
        <button type= "submit">Enviar</button>
    </form>
    <?php

    $idade = 18;

    if($idade >=18){

        echo "<p> voce nao pode dirigir </p>";
    }else{

        echo "<p> voce pode dirigir </p>";
    }

?>

    
</body>
</html>