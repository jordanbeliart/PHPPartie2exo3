<?php
$gender = 'Femme';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie2 exo3</title>
  </head>
  <body>
    <?php
      if ($gender != 'Homme') {
        echo 'C\'est une développeuse !!!';
      } else {
        echo 'C\'est un développeur !!!';
      }
    ?>
  </body>
</html>
