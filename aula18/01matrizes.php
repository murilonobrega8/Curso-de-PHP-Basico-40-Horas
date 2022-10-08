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
                    $m = array( 3,
                                4,
                                5);
                    print_r($m);
                ?>
            </pre>

            <pre>
                <?php
                    $m0 = array( array(6,4),
                                 array(4,9),
                                 array(3,2));
                    print_r($m0);
                ?>
            </pre>

            <pre>
                <?php
                    $m1 = array( array(6,4),
                                 array(4,9),
                                 array(3,2));
                    $m1[0][1] = $m1[2][0];
                    print_r($m1);
                ?>
            </pre>
        </div>
    </body>
</html>