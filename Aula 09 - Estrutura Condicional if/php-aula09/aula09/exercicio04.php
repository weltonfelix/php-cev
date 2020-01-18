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
        $pro = isset($_GET["prod"])?$_GET["prod"]:"sem nome";
		$pre = isset($_GET["preco"])?$_GET["preco"]:0;
		$tip = isset($_GET["tipo"])?$_GET["tipo"]:"A";
		$per = isset($_GET["perc"])?$_GET["perc"]:0;
		if ($tip == "A") {
			$novop = $pre + ($pre * $per/100);
			$modo = "AUMENTO";
		}
		else {
			$novop = $pre - ($pre * $per/100);
			$modo = "DESCONTO";
		}
		echo "O produto <span class='foco'>$pro</span> custava <span class='foco'>R$" . number_format($pre,2) . "</span>. <br/> Foi aplicado <span class='foco'>". number_format($per,1) . "%</span> de <span class='foco'>$modo</span>.<br/> Seu novo pre&ccedil;o &eacute; <span class='foco'>R$" . number_format($novop, 2) . "</span>.<br/>";
    ?>
	<br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 