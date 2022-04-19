<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$jeux = array ("Uno", "7 familles", "jungle speed");
foreach ($jeux as $value){
    echo "$value <br>";
}
$i=0;
        $nbJeux = count($jeux);
        echo "<p>AFFICHAGE AVEC BOUCLE WHILE</p> <ul>";
        while($i<$nbJeux){
            echo "<li>" . $jeux[$i] . "</li>";
            $i++;
        }
        echo "<p>AFFICHAGE AVEC BOUCLE FOR</p> <ul>";
        for($i=0; $i<$nbJeux; $i++){
            echo "<li>" . $jeux[$i] . "</li>";
        }
        echo "</ul>";
        /*affichage du contenu avec une boucle FOR*/
        echo "<p>AFFICHAGE AVEC BOUCLE FOREACH</p> <ul>";
        foreach($jeux as $jeu){
            echo "<li>" . $jeu . "</li>";
        }
        echo "</ul>";  
?>
</body>
</html>