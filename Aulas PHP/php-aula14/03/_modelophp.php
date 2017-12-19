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

      function soma() {

        $p = func_get_args();
        $tot = func_num_args();
        $s = 0;

        for($i=0; $i<$tot; $i++) {

          $s += $p[$i];

        }

        return $s;
      }

      $r = soma(2,2,2,2,2,2,2,2);

      echo "A soma do vetor e: $r";
        
    ?>
</div>
</body>
</html>
 