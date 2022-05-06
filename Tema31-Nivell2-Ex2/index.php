<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3-1 Nivell 2 Ex 2</title>

</head>

<body>

    <style>
        * {
            font-size: 30px;
            text-align: center;
        }

        input,a {
            padding: 10px 20px;
            overflow: hidden;
            transition: .5s;
            margin: 30px;
            letter-spacing: 3px;
        }

        a{
            color: #000;
            text-decoration: none;
            border: 1px solid;
            background-color: rgb(239, 239, 239);
        }

        input.boto:hover, a:hover {
            background: green;
            color: #fff;
            border-radius: 5px;

        }

        span {
            color: #000;
            font-size: 2rem;
        }

    </style>

    <h1>Tema 3-1 Nivell 2 Ex 2</h1>
    <p>La telefonica</p>
    <p>Calcula el preu de la teva trucada</p>

    <form action="#" method="post">
       <input type="number" placeholder="Posa els minuts" name="a"> <br>
       <input class="boto" type="submit" name="enviar">
       <a class="boto" href="/curso_php">RESET</a>
   </form>

   <?php

       $a = 0;

       if(isset($_POST['enviar'])){

           $a = $_POST["a"];

       }

    costTrucada($a);

    function costTrucada($a){

        if ($a == 0) {
            echo "Posa un número de minuts ";
        }
        elseif ($a <= 3) {
            $preu = 10;
            echo resposta($preu,$a);
        } 
        elseif ($a>=4) {
            $preu = -5;
            for ($i=0; $i < $a; $i++) { 
              $preu+=5;  
            }
            echo resposta($preu,$a);
        } 
        
    }

    function resposta($preu, $a){
        echo "El cost de la trucada son <span>"
        .$preu. " </span>centims, per<span> "
        .$a." </span>minuts";
    }


   ?>

</body>

</html>