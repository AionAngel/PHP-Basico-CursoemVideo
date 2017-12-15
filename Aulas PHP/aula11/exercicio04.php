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

      $i = isset($_GET["inicio"])?$_GET["inicio"]:0;
      $f = isset($_GET["final"])?$_GET["final"]:0;
      $inc = isset($_GET["inc"])?$_GET["inc"]:0;

      if($f > $i) {

        while ($i <=  $f) {
          echo $i."&nbsp";
          $i += $inc;
        }

      }else if($i > $f) {
        while ($i >= $f) {
          echo $i."&nbsp";
          $i -= $inc;
        }
      }else {
        echo "os numeros são iguais";
      }
        
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 