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
                $nome = "Gustavo Guanabara";
                $nome0 = strtolower($nome);
                echo "Seu nome em minúsculas é $nome0";
                echo "<br><br>";
                $nome1 = strtoupper($nome);
                print ("Seu nome em maiúsculas é ".$nome1);
                echo "<br><br>"; // ou melhor assim:
                print ("Seu nome em maiúsculas é ".strtoupper($nome));
                echo "<br><br>";
                print ("Seu nome é ".ucfirst($nome0)); 
                echo "<br><br>";
                print ("Seu nome é ".ucfirst($nome1)); 
                echo "<br><br>";
                print ("Seu nome é ".ucfirst(strtolower($nome1))); 
                echo "<br><br>";
                print ("Seu nome é ".ucwords($nome0)); 
                echo "<br><br>";
                print ("Seu nome é ".ucwords($nome1)); 
                echo "<br><br>";
                print ("Seu nome é ".ucwords(strtolower($nome1))); 
                echo "<br><br>";
                print ("Seu nome inverso é ".strrev($nome1)); 
                echo "<br><br>";



                
            ?>
        </div>
    </body>
</html>