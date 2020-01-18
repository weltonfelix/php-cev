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
                $b = &$a;
                $b += 5;
                echo "A variável A vale $a";
                echo "<br/>A variável B vale $b";
            ?>
        </div>
    </body>
</html>
 