<?php
//inizializzo le variabili
$firstName = $_GET['nome'];
$age = $_GET['eta'];
$frase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Provident ad molestias distinctio, 
    vel recusandae modi repellat."
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ciao sono <?php echo $firstName; ?> e ho <?php echo $age; ?> anni</h1>
    <hr>
    <h2>test echo: <?php echo "hola" ?></h2>
    <p>
        <strong>Es di paragrafo lorem stampato con echo:</strong> <?php echo $frase; ?>
    </p>
    <hr>
    <p>
        <strong>lunghezza frase</strong> <?php echo strlen($frase); ?>
    </p>
    <hr>
    <p>
        <strong>Posizione parola Amet modificata con parola BreakPoint: </strong><?php echo str_replace('amet', '<strong>breakPoint</strong>', $frase); ?>
    </p>
</body>

</html>