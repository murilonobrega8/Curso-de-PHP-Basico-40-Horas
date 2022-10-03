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
                $ini = isset($_GET["inicio"])?$_GET["inicio"]:0;
                $fim = isset($_GET["fim"])?$_GET["fim"]:0;
                $sal = isset($_GET["salto"])?$_GET["salto"]:0;
                                
                echo "$ini ";
                
                if($ini < $fim) { // Essa condição é para especificar que haverá uma incrementação
                    while($ini <= $fim) { 
                        $ini += $sal;
                        if($ini <= $fim) {
                            echo "$ini ";
                        }
                    }
                } else { // Nesse caso, essa condição é para especificar que haverá uma decrementação
                    while($ini >= $fim) { 
                        $ini -= $sal;
                        if($ini >= $fim) {
                            echo "$ini ";
                        }
                    } 
                }
            ?>
        </div>
    </body>
</html>

