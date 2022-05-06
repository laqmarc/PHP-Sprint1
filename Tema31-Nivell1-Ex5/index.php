<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3-1 Nivell 1 Ex 5</title>

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

        .container-num {
            max-width: 500px;
            margin: auto;
        }

        .conto {

            animation: countNumber 0.5s 4 alternate;
            animation-timing-function: steps(50);
        }

    </style>

    <h1>Tema 3-1 Nivell 1 Ex 5</h1>
    <p>Posa una nota del 0 al 100</p>

    <form action="#" method="post">
        <input type="number" placeholder="Posa una nota" name="a"> <br>
        <input class="boto" type="submit" name="enviar">
        <a class="boto" href="/curso_php">RESET</a>
    </form>

    <?php

       $a = 0;

       if(isset($_POST['enviar'])){

           $a = $_POST["a"];

       }

        quinaNota($a);

       function quinaNota($a){
            
        if ($a == 0) {
            echo "Posa un número ";
        }elseif ($a<33) {
            echo "Has de reaprovar";
        }elseif ($a>=33 && $a<=44) {
            echo "Estas a Tercera Divisió";
        }elseif ($a>=45 && $a<=59) {
            echo "Estas a Segona Divisió";
        }else {
            echo "Estas a Primera Divisió";
        }

       }

   ?>

</body>

</html>