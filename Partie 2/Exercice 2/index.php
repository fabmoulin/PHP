<?php
$age = 20;
$gender = 'X';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"lang="fr"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercice 2 P 2</title>
  <meta name="description" content="Créer deux variables age et gender. La variable gender peut prendre comme valeur :Homme Femme
  En fonction de l'âge et du genre afficher la phrase correspondante :

  Vous êtes un homme et vous êtes majeur
  Vous êtes un homme et vous êtes mineur
  Vous êtes une femme et vous êtes majeur
  Vous êtes une femme et vous êtes mineur
  Gérer tous les cas.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>
<body>
  <?php
  if ($age > 0 && $age < 120){
    if($gender =='Femme' && $age < 18) {
      ?>
      <p>Vous êtes une femme et vous êtes mineur</p>
    <?php }else if ($gender =='Femme' && $age >= 18) { ?>
      <p>Vous êtes une femme et vous êtes majeure</p>
    <?php }else if ( $gender =='Homme' && $age >= 18) { ?>
      <p>vous êtes un homme et vous êtes majeur</p>
    <?php }else if ( $gender =='Homme' && $age < 18) { ?>
      <p>Vous êtes un homme et vous êtes mineur</p>
    <?php }else{ ?>
      <p> La valeur genre saisie n'est pas valide </p>
      <?php
    }
  }else{
    ?>
    <p> La valeur age saisie n'est pas valide.</p>
  <?php } ?>
</body>
</html>


