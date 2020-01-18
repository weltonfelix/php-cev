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
        $site = "Curso em Vídeo";
        $sub = substr($site, 0, 5);
        echo "$sub ";
        print(substr($site, 9, 6));
    ?>
</div>
</body>
</html>
 