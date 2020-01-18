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
        $nome = "Welton";
        $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
        print("<pre>Eu, $novo sou lindo!</pre><br/>");
        $novo1 = str_pad($nome, 30, " ", STR_PAD_BOTH /* = STR_PAD_CENTER*/);
        print("<pre>Eu, $novo1 sou lindo!</pre><br/>");
        $novo2 = str_pad($nome, 30, " ", STR_PAD_LEFT);
        print("<pre>Eu, $novo2 sou lindo!</pre><br/>");
    ?>
</div>
</body>
</html>
 