<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr" dir="ltr"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Exercice 6 Partie 3 PHP</title>
        <meta name="description" content="création tableau associatif départements des hauts de france afficher toutes les valeurs avec clés ">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <?php
// On crée notre array $coordonnees
$departments = array (
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-de-Calais',
    '80' => 'Somme');

    foreach($departments as $cle => $element)
{
    echo 'Le département ' . $element . ' a le numéro ' . $cle . '<br />';
}
?>


    </body>
</html>