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
                $vi = isset($_GET["ini"])?$_GET["ini"]:0;
                $vf = isset($_GET["fin"])?$_GET["fin"]:0;
                $in = isset($_GET["inc"])?$_GET["inc"]:1;
                if($vi < $vf) {
                    $i = $vi;
                    while ($i <= $vf) {
                        echo "$i ";
                        $i +=$in;
                    }
                }
                elseif($vi > $vf) {
                    $i = $vi;
                    while ($vf <= $i) {
                        echo "$i ";
                        $i -=$in;
                    }
                }
            ?>
            <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>
 