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
       $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
       $ano = isset($_GET["ano"])?$_GET["ano"]:0;
       $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
       $idade = date("Y") - $ano;
       echo "$nome e $sexo e tem $idade anos.";
    ?>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 