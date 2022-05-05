<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 1 Ex 4</title>
</head>

<body>

    <style>

        html {
            scroll-behavior: smooth;
        }

        header {
            position: fixed;
            width: 100%;
            margin: auto;
            background-color: #fff;

            
        }

        h1 {
            padding-left: 50px;
        }

        ul {
            display: flex;
            list-style-type: none;
            text-align: center;
            
        }
        li {
            border: 1px solid;
            border-radius: 10px;
            padding: 10px 20px;
            margin-right: 10px;
        }

        a{
            text-decoration: none;
            color: #000;
            font-size: 1.5rem;
        }

        .variables {
            position: fixed;
            right: 30px;
            top: 30px;
            padding: 10px 30px 30px 30px;
            height: auto;
            border: 1px solid;
        }

        div {
            padding: 45vh 0vh;
            height: 100vh;
            text-align: center;
        }

        span {
            font-size: 2rem;
        }

    </style>

    <header>

    <h1>Tema 3 Nivell 1 Ex 4</h1>
        
        <ul>
        
            <!-- Per fer una prova he generat un menú amb àncores :) -->
            
            <?php

                for ($i=1; $i < 14 ; $i++) { 
                
                    echo '<li><a href="#'.$i.'">'.$i.'</a></li>';
            
                }
            
            ?>

        </ul>

    </header>

    <?php

        $x = 5;
        $y = 10;
        $m = 5.5;
        $n = 10.10;

        echo '<div class="variables"><p>Els valors de les variables:</p>' . "<br/>";
        echo "X = " . $x . "<br/>";
        echo "Y = " . $y . "<br/>";
        echo "M = " . $m . "<br/>";
        echo "N = " . $n . "<br/></div>";

        echo '<div id="1"><span>1</span>- Els valors de le variables X i Y :' . "<br/>";
        echo "El valor de X és " ."<span>" . $x . "</span><br/>";
        echo "El valor de Y és " ."<span>" . $y . "</span></div><br/>";

        echo '<div  id="2"><span>2</span>- La suma de les variables X i Y :' . "<br/>";
        $suma = ($x + $y);

        echo $x . " + " . $y . " =<span> " . $suma . "</span></div><br/>";

        echo '<div id="3"><span>3</span>- La resta de les variables X i Y :' . "<br/>";
        $resta = ($x  - $y);

        echo $x . " - " . $y . " =<span> " . $resta . "</span></div><br/>";

        echo '<div id="4"><span>4</span>- La producte de les variables X i Y :' . "<br/>";
        $producte = ($x * $y);

        echo $x . " * " . $y . " =<span> " . $producte . "</span></div><br/>";

        echo '<div id="5"><span>5</span>- El modul de les variables X i Y :' . "<br/>";
        $modul = ($x % $y);

        echo $x . " modul " . $y . " =<span> " . $modul . "</span></div><br/>";

        echo '<div id="6"><span>6</span>- Els valors de les variables M i N :' . "<br/>";
        echo "El valor de M és " ."<span>" . $m . "</span><br/>";
        echo "El valor de N és " ."<span>" . $n . "</span></div><br/>";

        echo '<div id="7"><span>7</span>- La suma de les variables M i N :' . "<br/>";
        $suma = ($m + $n);

        echo $m . " + " . $n . " =<span> " . $suma . "</span></div><br/>";

        echo '<div id="8"><span>8</span>- La resta de les variables M i N :' . "<br/>";
        $resta = ($m  - $n);

        echo $m . " - " . $n . " =<span> " . $resta . "</span></div><br/>";

        echo '<div id="9"><span>9</span>- La producte de les variables M i N :' . "<br/>";
        $producte = ($m * $n);

        echo $m . " * " . $n . " =<span> " . $producte . "</span></div><br/>";

        echo '<div id="10"><span>10</span>- El modul de les variables M i N :' . "<br/>";
        $modul = ($m % $n);

        echo $m . " modul " . $n . " =<span> " . $modul . "</span></div><br/>";

        $doble = 2;
        echo '<div id="11"><span>11</span>- El doble de les variables X, Y, M, N és : ' . "<br/>";
        echo "Per a <span>X</span> : " .$x . " X " . $doble . " =<span> " . $x*$doble . "</span> " . "<br/>";
        echo "Per a <span>Y</span> : " .$y . " X " . $doble . " =<span> " . $y*$doble . "</span> " . "<br/>";
        echo "Per a <span>M</span> : " .$m . " X " . $doble . " =<span> " . $m*$doble . "</span> " . "<br/>";
        echo "Per a <span>N</span> : " .$n . " X " . $doble . " =<span> " . $n*$doble . "</span> " . "</div><br/>";

        $sumaNum = $x + $y + $m + $n;
        echo '<div id="12"><span>12</span>- La suma de totes les variables X, Y, M, N és : ' . "<span>" . $sumaNum . "</span></div><br/>";

        $mutiplicar = $x * $y * $m * $n;
        echo '<div id="13"><span>13</span>- El producte de totes les variables X, Y, M, N és : ' . "<span>" . $mutiplicar . "</span></div><br/>";

    ?>

</body>

</html>