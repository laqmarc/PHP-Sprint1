<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3-1 Nivell 2 Ex 3</title>

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
            margin: 15px;
            letter-spacing: 3px;
            max-width:400px;
        }

        a{
            color: #000;
            text-decoration: none;
            border: 1px solid;
            background-color: rgb(239, 239, 239);
        }
        form {
            
            max-width: 400px;
            text-align:center;
            margin: auto;
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

    <h1>Tema 3-1 Nivell 2 Ex 3</h1>
    <p>La botiga de xuxes</p>
    <p>Calcula el preu de la teva compra</p>

    <form action="#" method="post">
        <label>Cantitat xocolata - 1€</label>
        <input type="number" placeholder="cantitat xocolata" value=0 name="xoco"> <br>
        <label>Cantitat xiclet - 0.5€ </label>
        <input type="number" placeholder="cantitat xiclet" value=0 name="xiclet"> <br>
        <label>Cantitat caramel - 1.5€</label>
        <input type="number" placeholder="cantitat caramel" value=0 name="caramel"> <br>
        <input class="boto" type="submit" name="enviar">
        <a class="boto" href="/curso_php">RESET</a>
   </form>

   <?php

       $xoco = 0;
       $xiclet = 0;
       $caramel = 0;

       if(isset($_POST['enviar'])){

           $xoco = $_POST["xoco"];
           $xiclet = $_POST["xiclet"];
           $caramel = $_POST["caramel"];

       }
       
        $preuXocolata = xocolata($xoco);
        $preuXiclet = xiclets($xiclet);
        $preuCaramel = caramels($caramel);
        $preu = ($preuXocolata+$preuXiclet+$preuCaramel);

        echo "El preu total és de " . $preu. "€";

        function xocolata($xoco){
            return $xoco;
        }
        
        function xiclets($xiclet){
            return $xiclet*0.5;
        }

        function caramels($caramel){
            return $caramel*1.5;
        }  
    
    ?>

</body>

</html>