<?php

    $nro1 = 0;
    $nro2 = 0;
    $resultado = 0;
    $calcular = 'somar';

    if(isset($_GET['nro1'], $_GET['nro2'], $_GET['calcular'])){
        $nro1 = $_GET['nro1'];
        $nro2 = $_GET['nro2'];
        $calcular = $_GET['calcular'];

        switch($calcular){
            case 'Somar':
                $resultado = $nro1 + $nro2;
                break;
            case 'Subtrair':
                $resultado = $nro1 - $nro2;
                break;
            case 'Multiplicar':
                $resultado = $nro1 * $nro2;
                break;
            case 'Dividir':
                $resultado = $nro1 / $nro2;
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>

    <style>
        body {
            text-align: center;
        }
        input{
            margin: 0;
            margin-bottom: 40px;
        }

        form {
            margin-top: 20px;
            margin-left: 500px;
            border: black 2px solid;
            width: 300px;
            height: 500px;
            text-align: center;
        }

    </style>
</head>
<body>
    <form method="GET">
        <h1>Primeiro numero</h1>
        <input type="number" name="nro1" value=<?= $nro1?> required/><br />
        <h1>Segundo numero</h1>
        <input type="number" name="nro2" value=<?= $nro2?> required/><br /><br />
        
        <select name="calcular">
            <option value="Somar">somar</option>
            <option value="Subtrair">Subtrair</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select>

        <br /><br />
        <input type="submit" value="calcular"/>
        <br /><br />
        <p><b> O Resultado é <?= $resultado ?></b></p> 
    </form >
</body>
</html>