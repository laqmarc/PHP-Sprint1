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

        span{
            color:blue;
            font-size: 2rem;
        }

    </style>

    <h1>Tema 3-1 Nivell 1 Ex 1</h1>
    <p>Posa un numero i et dic si és parell o imparell</p>
   
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

        parell($a);


        function parell($a){

            if ($a == 0) {
                echo "Posa un número ";
            }
            elseif (($a % 2) == 0) {
                echo 'El número<span> '.$a.' </span>és parell';
            } 
            else {
                echo 'El número<span> '.$a.' </span>és imparell';
            }
        }
        
    ?>

</body>

</html>