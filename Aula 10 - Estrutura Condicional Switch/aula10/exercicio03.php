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
                $es = $_GET["est"];
                switch ($es) {
                    case "AC":
                    case "AP":
                    case "AM":
                    case "PA":
                    case "RR":
                    case "TO":
                        $r = "Região Norte";
                        break;

                    case "AL":
                    case "BA":
                    case "CE":
                    case "MA":
                    case "PB":
                    case "PE":
                    case "PI":
                    case "RN":
                    case "SE":
                        $r = "Região Nordeste";
                        break;

                    case "DF":
                    case "GO":
                    case "MT":
                    case "MS":
                        $r = "Região Centro-Oeste";
                        break;

                    case "ES":
                    case "MG":
                    case "RJ":
                    case "SP":
                        $r = "Região Sudeste";
                        break;

                    case "PR":
                    case "RS":
                    case "SC":
                        $r = "Região Sul";
                }
                echo "Você mora na <span class='foco'>$r</span>"
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>
 