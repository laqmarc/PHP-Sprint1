<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3-1 Nivell 3 Ex 3</title>

</head>

<body>
    <!--
- Exercici 2
Per jugar a el "amagatall" se'ns ha demanat un programa que compti
 fins a 10. Però la persona que comptarà és una mica tramposa i ho 
 farà comptant de dos en dos. Crea una funció que compti fins a 10,
  de 2 en 2, mostrant cada número del compte per pantalla.
-->
    <style>
        * {
            font-size: 30px;
            text-align: center;
        }

        input,
        a {
            padding: 10px 20px;
            overflow: hidden;
            transition: .5s;
            margin: 30px;
            letter-spacing: 3px;
        }

        a {
            color: #000;
            text-decoration: none;
            border: 1px solid;
            background-color: rgb(239, 239, 239);
        }

        input.boto:hover,
        a:hover {
            background: green;
            color: #fff;
            border-radius: 5px;

        }

        span {
            color: blue;
            font-size: 2rem;
        }

        .conto {

            animation: countNumber 1s 10 alternate;
            animation-timing-function: steps(50);
        }


        @keyframes countNumber {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>

    <h1>Tema 3-1 Nivell 1 Ex 1</h1>
    <p>M'amago i compto de dos en dos</p>

    <?php

        comptoDeDos();

        function comptoDeDos(){

          for ($i=1; $i <= 10  ; $i++) { 
            echo '<span class="conto">'.++$i."</span><br/>";
          }  
        }
        
    ?>

</body>

</html>