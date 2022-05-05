<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 2 Ex 1</title>
</head>

<body>

<style>
* {
    font-size:30px;
    text-align: center;
}

input {
    padding: 10px 20px;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 3px;
}

input.boto:hover {
  background: green;
  color: #fff;
  border-radius: 5px;

}

</style>

        <h1>Tema 3 Nivell 2 Ex 1</h1>
        <p>Posa els numeros als inputs i després apreta l'enviar</p>
        <p>Si els dos valors són iguals, tornará el doble de la seva suma</p>
        
        <form action="#" method="post">
            <input type="number" placeholder="primer numero" name="a"> <br>
            <input type="number" placeholder="segon numero" name="b"><br>
            <input class="boto" type="submit" name="enviar">
        </form>
        
        <?php

            $a = -1;
            $b = 1;
            if(isset($_POST['enviar'])){

                $a = $_POST["a"];
                $b = $_POST["b"];

            }

            if ($a === $b) {
                $valorFinal = 2*($a+$b);
                echo '<p> RESULTAT TOTAL - NUMEROS IGUALS: ' . $valorFinal . '</p>';
            }
            else{
                $valorFinal = $a+$b;
                echo '<p> RESULTAT TOTAL : ' . $valorFinal . '</p>';
            }

        ?>

</body>

</html>