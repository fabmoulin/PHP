<?php
$age = 20;
$gender = 'Femme';
$message = '';
if ($age > 0 && $age < 120){
  if($gender =='Femme' && $age < 18) {
    $message = 'Vous êtes une femme et vous êtes mineur';
  }
  else if ($gender =='Femme' && $age >= 18) {
    $message ='Vous êtes une femme et vous êtes majeure';
  }
  else if ( $gender =='Homme' && $age >= 18) {
    $message='vous êtes un homme et vous êtes majeur';
  }
  else if ( $gender =='Homme' && $age < 18) {
    $message ='Vous êtes un homme et vous êtes mineur';
  }
  else{
    $message ='La valeur genre saisie n\'est pas valide';
  }
}
else{
  $message ='La valeur age saisie n\'est pas valide.';
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Exercice 2 P2</title>
  <meta name="description" content="Remplacer les balises <p> et echo par une variable message">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
</head>
<body>
  <p> <?php echo $message; ?> </p>
</body>
</html>