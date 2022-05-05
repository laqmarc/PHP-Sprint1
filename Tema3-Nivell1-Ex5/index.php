<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 1 Ex 5</title>
</head>

<body>
    <h1>Tema 3 Nivell 1 Ex 5</h1>
   <!--
       - Exercici 5
Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

Afegeix un valor més a l'array que conté 3 integers.
Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.
Ara imprimeix per pantalla l'array resultant valor a valor.
Consell: pot ser que les funcions var_dump () i / o print_r () 
et resultin útils per a visualitzar el contingut de les teves arrays.

-->


    <?php

        $nums = array(1,2,3,4,5);
        $nums2 = array(6,7,8);
        $nums2[] = 9;
        $final = array_merge($nums,$nums2);

        echo "Amb el print_r :<br/>";
        echo print_r ($final) . "<br/><br/>";
        echo "Amb el var_dump :<br/> ";
        echo "<pre>";
        var_dump($final);
        echo "</pre>";

    ?>

</body>

</html>