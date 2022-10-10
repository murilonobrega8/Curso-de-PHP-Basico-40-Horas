<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>

    <body>
        <div>
            <?php
                $i = 1; // 1º while pega os dados da url
                while($i <= 5) {
                    $v = "num".$i;
                    $url = "v".$i;
                    $$v = isset($_GET[$url])?$_GET[$url]:0;
                    $i++;
                }

                echo "$num1 $num2 $num3 $num4 $num5<br>";
                
                $i = 1; // Este bloco mostra os dados pegos pela url
                while($i <= 5){
                    $v = "num".$i;
                    echo "Valor $i: ". $$v ."<br/>";
                    $i++;
                }

                /* 
                $v1 = isset($_GET["v1"])?$_GET["v1"]:0;
                $v2 = isset($_GET["v2"])?$_GET["v2"]:0;
                $v3 = isset($_GET["v3"])?$_GET["v3"]:0;
                $v4 = isset($_GET["v4"])?$_GET["v4"]:0;
                $v5 = isset($_GET["v5"])?$_GET["v5"]:0;
                echo "Valor 1: $v1<br>";
                echo "Valor 2: $v2<br>";
                echo "Valor 3: $v3<br>";
                echo "Valor 4: $v4<br>";
                echo "Valor 5: $v5<br>";
                */
            ?>
        </div>
    </body>
</html>

