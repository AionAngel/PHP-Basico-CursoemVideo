<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
	h1 { font: 20pt Arial; }
	h2 { font: 18pt Arial; }
  </style>
</head>
<body>
<div>
    <?php
       $n = isset($_GET["num"])?$_GET["num"]:1;
	   echo "<h1>Analisando o numero $n ...</h1>";
	   echo "Valores multiplos: ";
	   $mult = 0;
	   for ($c = 1; $c <= $n; $c++) {
			if ($n % $c == 0) {
				$mult++;
				echo "$c ";
			}
		}
		echo "<p> Total de multiplos: $mult </p>";
		echo "<h2> Resultado: $n <span class='foco'>";
		if ($mult <= 2) {
			echo " &Eacute; PRIMO! ";
		} else {
			echo " N&Atilde;O &Eacute; PRIMO! ";
		}
		 echo "</span></h2>";
    ?>
	<br/>
	<a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 