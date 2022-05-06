<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3-1 Nivell 2 Ex 1</title>

</head>

<body>

    <style>
        * {
            font-size: 30px;
            text-align: center;
        }

        span {
            color: #000;
            font-size: 2rem;
        }
    </style>

    <h1>Tema 3-1 Nivell 2 Ex 1</h1>
    <p>Anys olimpics desde 1960 a 2016</p>

    <?php

    anysOlimpics();
    
    function anysOlimpics(){

        for ($i=1960; $i <= 2016; $i = $i + 4) { 
            echo $i."<br/>";
        }
        
    }

   ?>

</body>

</html>