<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3-1 Nivell 3 Ex 3</title>

</head>

<body>
    
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
            color: #000;
            font-size: 2rem;
        }

        .container-num{
            max-width:500px;
            margin: auto;
        }
        .conto {

            animation: countNumber 0.5s 4 alternate;
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

    <h1>Tema 3-1 Nivell 1 Ex 3</h1>
    <p>M'amago i compto de dos en dos</p>

    <p>Posa un numero i fins a ell, compto de 2 en 2</p>
   
   <form action="#" method="post">
       <input type="number" placeholder="Posa un numero" name="a"> <br>
       <input class="boto" type="submit" name="enviar">
       <a class="boto" href="/curso_php">RESET</a>
   </form>
   <?php

       $a = 0;

       if(isset($_POST['enviar'])){

           $a = $_POST["a"];

       }

       comptoDeDosAX($a);

       function comptoDeDosAX($a){
        echo '<div class="container-num">';
        for ($i=1; $i <= $a  ; $i++) { 
            echo '<span class="conto">'.++$i."  </span>";
          } 
       }
       echo '</div>';
   ?>

</body>

</html>