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
                $estado = isset ($_GET["estado"])?$_GET["estado"]:0;
                switch ($estado){
                    case 1:
                    echo "Você está na região Sul.";
                    break;
                    case 2:
                    echo "Você está na região Sudeste.";
                    break;
                    case 3:
                    echo "Você está na região Centro-Oeste.";
                    break;
                    case 4:
                    echo "Você está na região Nordeste.";
                    break;
                    case 5:
                    echo "Você está na região Norte.";
                }

                /* $estado = $_GET["estado"];
                echo "<p>Você mora na ";
                switch ($estado){
                    case "AM":
                    case "RR":
                    case "AP":
                    case "PA":
                    case "TO":
                    case "RO":
                    case "AC":
                        echo "<span class='foco'>Região Norte</span>";
                        break;
                    case "MA":
                    case "PI":
                    case "CE":
                    case "RN":
                    case "PE":
                    case "PB":
                    case "SE":
                    case "AL":
                    case "BA":
                        echo "<span class='foco'>Região Nordeste</span>";
                        break;
                    case "DF":
                    case "MT":
                    case "MS":
                    case "GO":
                        echo "<span class='foco'>Região Centro-Oeste</span>";
                        break;
                    case "SP":
                    case "RJ":
                    case "ES":
                    case "MG":
                        echo "<span class='foco'>Região Sudeste</span>";
                        break;
                    case "PR":
                    case "RS":
                    case "SC":
                        echo "<span class='foco'>Região Sul</span>";
                }
                echo ".</p>"; */
            ?>
        </div>
    </body>
</html>

