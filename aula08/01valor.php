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
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "O valor enviado para a variável foi $valor!";
                echo "<br/>A Raiz Quadrada de $valor é igual a $rq!";
                /* Formatado: */
                echo "<br/>A Raiz Quadrada de $valor é igual a ".number_format($rq,2)."!<br/>";
            ?>

            <a href="01exercicio.html">Voltar</a>
        </div>
    </body>
</html>

