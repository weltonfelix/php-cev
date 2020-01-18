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
        $v = isset($_GET ["val"]) ? $_GET["val"]:1;
        echo "<h2>Mostrando a Tabuada de $v</h2>";
        $cont = 1;
        do{
            $res = $v * $cont;
            echo "$v X $cont = $res <br/>";
            $cont++;
        } while($cont <= 10);
    ?>
    <p><a href="03-index.php" class="botao">Voltar</a></p>
</div>
</body>
</html>
 