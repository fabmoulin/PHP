<?php //balise d'ouverture - indique qu'on va écrire en php //A mettre dans le body d'un fichier HTML mais appelé PHP et non pas HTML
$answer = 'Yes'; //creation d'une variable
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr" dir="ltr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice 5 Partie 1 PHP</title>
        <meta name="description" content="varaible answer avec réponses à afficher">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>


<?php 
if ($answer == 'Yes') {
?>
    <p>Vous avez répondu oui </p>

<?php 
}
elseif ($answer == 'no'){
?>
    <p>Vous avez répondu non </p>

<?php
}
?>

    </body>
</html>


