<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Operacoes Aritmeticas</title>
</head>
<body>
<div>
    <?php
      $n1 = $_GET["a"];
      $n2 = $_GET["b"];
      echo "<h2>Valores recebidos: $n1 e $n2</h2>";
      $m = ($n1 + $n2) / 2;
      echo "A soma vale ". ($n1+$n2);
      echo "<br/>A subracao vale ". ($n1-$n2);
      echo "<br/>A multiplicacao vale ". ($n1*$n2);
      echo "<br/>A divisao vale ". ($n1/$n2);
      echo "<br/>O modulo vale ". ($n1%$n2);
      echo "<br/>A media vale $m";
    ?>
</div>
</body>
</html>
 