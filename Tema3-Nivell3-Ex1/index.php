<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 3 Ex 1</title>
</head>
<!--
Escriu un programa en PHP per convertir una cadena en un array
 (retallant cada caràcter i eliminant les línies buides).

Entrada
Hello world

Sortida
array(10) { [0]=> string(1) "H" [1]=> string(1) "e" [2]=> string(1) "l" [3]=> string(1) "l" [4]=> string(1) "o" [5]=> string(1) "W" [6]=> string(1) "o" [7]=> string(1) "r" [8]=> string(1) "l" [9]=> string(1) "d"}

-->
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

    <h1>Tema 3 Nivell 3 Ex 1</h1>
    <p>Escriu un programa en PHP per convertir una cadena en un array</p>
    <p>retallant cada caràcter i eliminant les línies buides.</p>

    <form action="#" method="post">
        <input type="text" placeholder="Posa algo" name="a"> <br>
        <input class="boto" type="submit" name="enviar">
    </form>

    <?php

        $a = "";

        if(isset($_POST['enviar'])){

            $a = $_POST["a"];

        }

        $busquem = " ";
        $remplacem = "";
        
        $senseEspais = str_replace($busquem, $remplacem, $a); 
        
        $arrayFinal = str_split($senseEspais);

        if ($arrayFinal[0] == "") {
            echo "Posa un frase";
        }else{
        echo "<pre>";
        var_dump($arrayFinal);
        echo "</pre>";
        }

    ?>

</body>

</html>