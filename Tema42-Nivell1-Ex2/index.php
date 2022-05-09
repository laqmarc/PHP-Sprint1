<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 4 Nivell 1 Ex 2</title>
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

        span {
            color: #000;
            font-size: 2rem;
        }

    </style>

    <h1>Tema 4 Nivell 1 Ex 2</h1>
    <p>Calculem l'area</p>


    <form action="#" method="post">
    <input type="number" placeholder="Posa l'ample" name="ample"> <br>
       <input type="number" placeholder="Posa l'altura" name="altura"> <br>
       <input class="boto" type="submit" name="enviar">
       <a class="boto" href="/curso_php">RESET</a>
   </form>



<?php

class Shape{

    public int $ample;
    public int $altura;

    
    public function __construct(int $ample, int $altura){

        $this->ample = $ample;
        $this->altura = $altura;

    }
    
    public function getAmple(){
        return $this->$ample;
    }

    public function getAltura(){
        return $this->$altura;        
    }
   
}

class Triangle extends Shape{

    function areaTriangle(){
        $areaT = ($this->ample * $this->altura)/2;
        return "L'àrea del triangle és :".$areaT.'<br/>';
    }

}

class Rectangle extends Shape {

    function areaRectangle(){

        $areaR = ($this->ample * $this->altura);
        return "L'area del rectangle és :".$areaR.'<br/>';
    }
}

$ample = 0;
$altura = 0;

if(isset($_POST['enviar'])){

    $ample = $_POST["ample"];
    $altura = $_POST["altura"];

}

$triangle = new Triangle($altura, $ample);

echo $triangle->areaTriangle();

$rectangle = new Rectangle($altura, $ample);

echo $rectangle->areaRectangle();


?>


</body>
</html>