<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3-1 Nivell 1 Ex 6</title>

</head>

<body>

    <style>
        * {
            font-size: 30px;
            text-align: center;
        }

        span {
            color: #000;
            font-size: 2rem;
        }
    </style>

    <h1>Tema 3-1 Nivell 1 Ex 6</h1>
    <p>Charlie em va mossegar el dit! a lo Random</p>

    <?php

        function isBitten(){
            
            $a = random_int(0,100);
            echo "El número Random és ".$a."<br/>";
            if($a >= 0 && $a<=49){
                return false;
                }elseif($a>=50){
                return true;
            }
            
        }
        
        $b = isBitten();

        if ($b === true){
            echo '<span>Charlie m'."'".'ha mossegat</span><br/>';
        }else {
            echo '<span>Charlie no m'."'".'ha mossegat</span><br/>';
        }
    
   ?>

</body>

</html>