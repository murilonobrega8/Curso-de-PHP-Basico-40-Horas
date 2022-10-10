<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>

    <body>
        <div>
            <pre>
                <?php
                    // Chaves Associativas
                    $cad = array("nome"=>"Ana","idade"=>23,"peso"=>78.5);
                    print_r($cad);
                ?>

                <?php
                    $cad0 = array("nome"=>"Ana","idade"=>23,"peso"=>78.5);
                    $cad0["fuma"] = true;
                    print_r($cad0);
                    echo "<br><br>";
                    foreach($cad0 as $campo=>$valor) {
                        echo "O valor de $campo é $valor.<br>";
                    }
                ?>
            </pre>
        </div>
    </body>
</html>