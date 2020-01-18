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
        $ni = "       Welton Pereira da Luz Felix         ";
        $leni = strlen($ni);
        print "$ni tem $leni caracteres <br/>";
        $nf = rtrim($ni);
        $lenf = strlen($nf);
        print "$nf tem $lenf caracteres";
    ?>
</div>
</body>
</html>
 