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
        $name[0] = "Welton";
        $name[1] = "Pereira";
        $name[2] = "da";
        $name[3] = "Luz";
        $name[4] = "Felix";

        $nome = join(" ",$name);
        print $nome;
    ?>
</div>
</body>
</html>
 