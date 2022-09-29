<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="../_aulasPHP/_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>

    <body>
        <div>
            <?php
                //$n1 = 3;
                //$n2 = 2;
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "<h2>Valores recebidos: $n1 e $n2.</h2>";
                $m = ($n1 + $n2) / 2;
                echo "A soma entre n1 e n2 é igual a ".($n1 + $n2).".";
                echo "<br/>A subtração entre n1 e n2 é igual a ".($n1 - $n2).".";
                echo "<br/>A multiplicação entre n1 e n2 é igual a ".($n1 * $n2).".";
                echo "<br/>A divisão entre n1 e n2 é igual a ".($n1 / $n2).".";
                echo "<br/>O módulo (o resto) de n1 e n2 é igual a ".($n1 % $n2).".";
                echo "<br/>A média entre n1 e n2 é igual a $m.";
                
            ?>
        </div>
    </body>
</html>

