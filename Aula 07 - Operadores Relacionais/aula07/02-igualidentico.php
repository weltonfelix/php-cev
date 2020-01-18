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
                $a = 3;
                $b = "3";
                $r = ($a === $b) ? "SIM" : "NÃO";
                echo "As variáveis A e B são idênticas? $r";
            ?>
        </div>
    </body>
</html>
 