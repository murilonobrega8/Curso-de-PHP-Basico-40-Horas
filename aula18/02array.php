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
                    $v = array(0=>5,1=>9,2=>8,3=>7);
                    print_r($v);
                ?>
            </pre>

            <pre>
                <?php
                    $v0 = array(3=>5,1=>9,0=>8,7=>7);
                    print_r($v0);
                ?>
            </pre>
            
            <pre>
                <?php
                    unset($v0[0]);
                    print_r($v0);
                ?>
            </pre>

            <pre>
                <?php
                    $v[2] = 6;
                    print_r($v);
                ?>
            </pre>

            <pre>
                <?php
                    $v[] = 8;
                    print_r($v);
                ?>
            </pre>
        </div>
    </body>
</html>