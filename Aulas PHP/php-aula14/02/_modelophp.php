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
        function soma($a, $b) {

          $s = $a + $b;
          return $s;

        }

        $x = 10;
        $y = 10;

        $r = soma($x,$y);

        echo "A soma retornada da função é: $r";
    ?>
</div>
</body>
</html>
 