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
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
		$n2 = isset($_GET["n2"])?$_GET["n2"]:0;
		$m = ($n1+$n2)/2;
		echo "A m&eacute;dia entre <span class='foco'>" . number_format($n1,1) . "</span> e <span class='foco'>" . number_format($n2, 1) . "</span> &eacute; igual a <span class='foco'>" . number_format($m,1) . "</span><br/>";
		if ($m < 5) {
			$sit = "REPROVADO";
		}
		elseif ($m >= 5 && $m < 7) {
			$sit = "RECUPERA&Ccedil;&Atilde;O";
		}
		else {
			$sit = "APROVADO";
		}
		echo "Situa&ccedil;&atilde;o do aluno: <span class='foco'>$sit</span><br/>";
    ?>
	<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 