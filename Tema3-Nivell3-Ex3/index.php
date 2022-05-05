<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 Nivell 3 Ex 3</title>

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

        span{
            color:blue;
        }

        .t {
            display: inline-block;
            overflow: hidden;
            letter-spacing: 1px;
            animation: tt 5s steps(30, end);
            white-space: nowrap;
            box-sizing: border-box;
        }

        .aa{
            animation: tt 1s steps(30, end);
        }

        @keyframes tt {
            from { 
                width: 0% 
            }
            to { 
                width: 100% 
            }
        }


    </style>

    <h1>Tema 3 Nivell 3 Ex 3</h1>
    <p>d'aquest array</p>
    <p>$x = array (10, 20, 30, 40, 50);</p>
    <p>Li treiem el 40 i reindexem amb l'<a target="_blank" href="https://www.php.net/manual/es/function.array-splice.php">array_splice</a>.</p>

    <?php

        $x = array (10, 20, 30, 40, 50);
        print_r($x)."<br/>";
        echo "<br/>";
        echo '<div class="t">' . borrant() . '</div>';
        array_splice($x, 3, 1);
        echo "<br/>";
        echo '<div class="aa">';
        print_r($x);
        echo '</div>';

        //provant de fer una funció per retornar missatge
        function borrant(){
            return "-------------------"."<br/>"."   BORRANT   "."<br/>"."-------------------"."<br/>";
        }
    ?>

    

</body>

</html>