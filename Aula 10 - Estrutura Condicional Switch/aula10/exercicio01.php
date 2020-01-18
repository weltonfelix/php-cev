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
                $n = isset($_GET["num"])?$_GET["num"]:0;
		        $o = isset($_GET["oper"])?$_GET["oper"]:1;
		        switch ($o) {
                    case 1:
                        $r = $n * 2;
                        break;
                    case 2:
                        $r = $n ^ 3;
                        break;
                    case 3:
                        $r = sqrt($n); //$n ^ (1/2); $n ^ 0.5
                }
                echo "O resultado da operação solicitada foi <span class='foco'>$r</span>"
            ?>
            <a href="exercicio01.html" class="botao">Voltar</a>
        </div>
    </body>
</html>
 