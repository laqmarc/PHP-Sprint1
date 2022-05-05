<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 3 Ex 2</title>
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

    <h1>Tema 3 Nivell 3 Ex 2</h1>
    <p>Escriu una frase</p>
    <p>i després el caracter que vols saber quants n'hi ha.</p>

    <form action="#" method="post">
        <input type="text" placeholder="Posa algo" name="a"> <br>
        <input type="text" placeholder="Caracter repetit" name="b"> <br>
        <input class="boto" type="submit" name="enviar">
    </form>

    <?php

        $a = "";
        $b = "";

        if(isset($_POST['enviar'])){

            $a = $_POST["a"];
            $b = $_POST["b"];
        }

        $busquem = " ";
        $remplacem = "";
        
        $senseEspais = str_replace($busquem, $remplacem, $a); 
        
        $arrayFinal = str_split($senseEspais);

        if ($arrayFinal[0] == "") {
            echo "Posa un frase";
        }else{
            if(count($arrayFinal) >= count(array_unique($arrayFinal))){
                $i = array_count_values($arrayFinal);
                echo "Hi ha " . $i[$b] . " repetits";
              }else{
                echo "No hi ha repetits";
              }
        }

    ?>

</body>

</html>