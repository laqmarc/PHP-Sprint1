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
    <input type="number" placeholder="Posa l'ample" name="width"> <br>
       <input type="number" placeholder="Posa l'altura" name="height"> <br>
       <input class="boto" type="submit" name="enviar">
       <a class="boto" href="/curso_php">RESET</a>
   </form>



<?php

abstract class Shape{

    protected $width;
    protected $height;

    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }

    public function area(){
        return $this->width * $this->height ;
    }

}

class Triangle extends Shape{

    public function area(){
        return ($this->width * $this->height) / 2;
    }

}

class Rectangle extends Shape {

    public function area(){
        return $this->width * $this->height;
    }

}

$width = 0;
$height = 0;

if(isset($_POST['enviar'])){

    $width = $_POST["width"];
    $height = $_POST["height"];

}

$triangle = new Triangle($width, $height);

echo 'Area del triangle '. $triangle->area().'<br>';

$rectangle = new Rectangle($width, $height);

echo 'Area del rectangle '.$rectangle->area();

?>


</body>
</html>