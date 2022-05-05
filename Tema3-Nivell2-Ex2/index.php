<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 2 Ex 2</title>
</head>

<body>

    <style>
        * {
            font-size: 30px;
            text-align: center;
        }

        input {
            padding: 10px 20px;
            overflow: hidden;
            transition: .5s;
            margin: 30px;
            letter-spacing: 3px;
        }

        input.boto:hover {
            background: green;
            color: #fff;
            border-radius: 5px;

        }
    </style>

    <h1>Tema 3 Nivell 2 Ex 2</h1>
    <p>Escriu un programa PHP per intercanviar el primer i últim </p>
    <p>caràcter d'una cadena donada i imprimeix la nova cadena.</p>

    <form action="#" method="post">
        <input type="text" placeholder="Posa algo" name="a"> <br>
        <input class="boto" type="submit" name="enviar">
    </form>

    <?php

            $a = "";

            if(isset($_POST['enviar'])){

                $a = $_POST["a"];

            }


        ?>


    <?php 

echo "Separem l'String en paraules passat-ho a un array<br/><br/>";

$array = explode ( ' ', $a );

foreach ( $array as $paraules ) {

     echo $paraules . "<br/>";

    // echo "primera lletra: " . $paraules[0]. "<br/>"; 
     $primera = $paraules[0];
    // echo "ultima lletra: " . $paraules[strlen($paraules)-1]. "<br/>";
     $ultima = $paraules[strlen($paraules)-1];
    // echo "Al revés: " . strrev($paraules). "<br>";
     echo substr(str_replace($primera, $ultima, $paraules), 0, -1) . $primera . "<br/>**<br/>";
    }

?>

</body>

</html>