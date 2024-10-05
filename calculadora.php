<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Fullstack</h1>
    <form action="calculadora.php" mehod="post">
        
        <label>Primeiro Numero</label>
        <input type="text" name="primeiroNumero" id="primeiroNumero"></input>
        
        <label>Segundo Numero</label>
        <input type="text" name="segundoNumero" id="segundoNumero"></input>

        <input type="submit" value="calcular">        

        
    </form>

    <hr/>

    <p>Resultado da operação</p>

    <?php 
    if(empty($_POST["primeiroNumero"]))

    ?>
</body>
</html>