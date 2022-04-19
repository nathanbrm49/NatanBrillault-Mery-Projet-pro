<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /*$prix = array ("Uno"=>25, "7 familles" => 12, "jungle speed" => 31);
   accès aux élément du tableau par leur index
   *echo "Le prix du Uno: " . $prix["Uno"];
   fonction count pour connaître le nombre d'élément
   echo "<br><b>il y a " . count($prix) . " jeux associés à leur prix dans mon tableau.</b>";
   ajout d'un élément, si on ne précise pas d'index alors il est placé à la fin 
   $prix["Twist"]= 41;
   /affichage du contenu du tableau
   echo " <pre>" . print_r($prix, true) . "</pre>";
   suppression d'un élément du tableau
   unset($prix["7 familles"]);
   echo " suppression du jeu 7 familles <pre>" . print_r($prix, true) . "</pre>";*/

   $jeux=array (array("Uno",3,6),
                array("7 familles",2,4),
                array("Jungle speed",8,8));
    echo " <pre>" . print_r($jeux, true) . "</pre>";           
   $minJoueur=$jeux[2][1];
   unset($prix["7 familles"]);
   echo "nb min joueur ".$minJoueur;

    ?>
    </body>
</html>