<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 4 Nivell 1 Ex 1</title>
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

    <h1>Tema 4 Nivell 1 Ex 1</h1>
    <p>Treballadors</p>
    <p>Calculem si el sou és més de 6000</p>
    <p>Si ha de pagar impostos o no</p>
    <p>També guardem en un json les dades per provar</p>

    <form action="#" method="post">
       <input type="text" placeholder="Posa el nom" name="nom"> <br>
       <input type="number" placeholder="Posa el sou" name="sou"> <br>
       <input class="boto" type="submit" name="enviar">
       <a class="boto" href="/curso_php">RESET</a>
   </form>

   <?php

class Employe{

    protected String $nom;
    protected int $sou;

    public function __construct (String $nom, int $sou){

        $this->nom= $nom;
        $this->sou= $sou;

    }

    public function getName(){
        return $this->nom;
    }

    public function getSou(){
        return $this->sou;
    }

    public function impostos($sou){
        
       if ($sou===0) {
           echo "Introdueix les dades";
       }elseif ($sou>6000) {
            return $this->nom ." pagues impostos ja que el teu sou és de ".$this->sou."€";
        }
        else{
            return $this->nom ." no pagues impostos ja que el teu sou és de ".$this->sou."€";
        }

    }

}
       $nom = "";
       $sou = 0;

       if(isset($_POST['enviar'])){

           $nom = $_POST["nom"];
           $sou = $_POST["sou"];

       }
        
       //declarem un objecte;

        $treballador = new Employe($nom, $sou);
        $pagar =  $treballador->impostos($sou);
        echo $pagar."<br/>";

$treballador = array('nom'=> $nom, 'sou'=> $sou);

//Creem el JSON
$json_string = json_encode($treballador);
$arxiu = 'treballadors.json';
file_put_contents($arxiu, $json_string);


$treballadors = file_get_contents("treballadors.json");
$treballadors = json_decode($treballadors, true);


foreach ($treballadors as $treballador) {
   
    print($treballador)."<br>";

}
echo "check treballadors.json";

?>



</body>
</html>