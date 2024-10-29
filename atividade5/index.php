<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>

    <form method="POST">
        <p>Digite sua idade:</p>
        <input type="number" name="number" placeholder="Digite o seu nome" require>
        <button type="submit"> Verificar </button>
    </form>

    <?php
    if (isset($_POST['number'])){
        $idade = $_POST['number'];

     if($idade >= 18){
        echo "<p> Você pode dirigir </p>";
    } else{
         echo "<p> Você não pode dirigir </p>";
    }
    
    }    
?>

</body>
</html>