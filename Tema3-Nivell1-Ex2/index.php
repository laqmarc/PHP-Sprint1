


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 1 Ex 2</title>
</head>
<body>
    <style>
        span{font-size: 2rem;}
    </style>
<?php
echo "<h1>Tema 3 Nivell 1 Ex 2</h1>";
/*

- Exercici 2
1- Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després
2- Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
3- Imprimeix per pantalla la mida (longitud) de la variable.
4- Imprimeix per pantalla el string en ordre invers de caràcters.
5- Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de tots dos strings.

*/
$hello_world = "Hello, World!";
echo "1- Imprimeixo per pantalla: "."<span>$hello_world</span><br/>";
echo "2- Converteixo tots els caracters en majúscules " ."<span>" . strtoupper($hello_world) . "</span><br/>";
echo "3- La longitut de l'String es " ."<span>" . strlen($hello_world) . "</span><br/>";
echo "4- " . $hello_world . " a l'inrevés és: " . "<span>" . strrev($hello_world) . "</span><br/>";
$new_string = "Aquest és el curs de PHP";
echo "5- Concateno els dos Strings " ."<span>" . $hello_world.$new_string . "</span><br/>";

?>
</body>
</html>
