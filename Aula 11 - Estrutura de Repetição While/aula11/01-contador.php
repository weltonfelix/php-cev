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
                $c = 10;
                while ($c >= 0){
                    echo $c. "<br/>";
                    $c-=2; //$c = $c - 2;
                }
            ?>
        </div>
    </body>
</html>
 