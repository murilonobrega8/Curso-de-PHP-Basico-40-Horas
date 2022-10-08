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
                $frase = "Estou aprendendo PHP";
                $pos = strpos($frase,"PHP");
                echo "$frase<br>A string foi encontrada na posição $pos";
                $pos0 = stripos($frase,"php");
                echo "<br><br>$frase<br>A string foi encontrada na posição $pos0";
                echo "<br><br>";
                $frase0 = "Estou aprendendo PHP no curso em Vídeo de PHP";
                $cont = substr_count($frase0,"PHP");
                print("PHP encontrado $cont vezes.");
                echo "<br><br>";
                $site = "Curso em Vídeo";
                $sub = substr($site,0,5);
                echo "$sub ";
                echo "<br><br>";
                $sub0 = substr($site,6);
                echo "$sub0 ";
                echo "<br><br>";
                $sub1 = substr($site,-6);
                echo "$sub1 ";
                echo "<br><br>";
                $sub2 = substr($site,-6,3);
                echo "$sub2 ";
                echo "<br><br>";
                $nome = "Guanabara";
                $novo = str_pad($nome, 15, "#",STR_PAD_RIGHT);
                print("Meu professor $novo é feio.");
                echo "<br><br>";
                $novo0 = str_pad($nome, 15, "#",STR_PAD_BOTH);
                print("Meu professor $novo0 é feio.");
                echo "<br><br>";
                $novo1 = str_pad($nome, 15, "#",STR_PAD_LEFT);
                print("Meu professor $novo1 é feio.");
                echo "<br><br>";
                $txt = str_repeat("Php",5);
                print("O texto gerado foi $txt<br>");
                print(str_repeat("-",50));
                echo "<br><br>";
                $texto = "Gosto de estudar Matemática";
                echo "$texto<br>";
                $novafrase = str_replace("Matemática","PHP",$texto);
                echo "$novafrase";
                echo "<br><br>";
                $novafrase0 = str_replace("matemática","PHP",$texto);
                echo "$novafrase0";
                echo "<br><br>";
                $novafrase1 = str_ireplace("matemática","PHP",$texto);
                echo "$novafrase1";
                echo "<br><br>";


            ?>
        </div>
    </body>
</html>