<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr" dir="ltr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice 2 Partie 2 PHP</title>
        <meta name="description" content="variables age et gender">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

<?php //balise d'ouverture - indique qu'on va écrire en php //A mettre dans le body d'un fichier HTML mais appelé PHP et non pas HTML
//pour remplacer un "echo" on peut écrire <?= (= au lieu de PHP)
$age = 34; //creation d'une variable
$gender = 'femme'; //creation d'une variable

if ($age >= 18 AND $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes majeur';
}

elseif ($age < 18 AND $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes mineur';
}

?>

    </body>
</html>


