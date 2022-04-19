<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    function Age($date_naissance)
    {
        /*transformation des dates sous forme de tableaux. à la place 0 : année, 1: mois, 2 : jour*/
        $tabloDateNaissance = explode('-', $date_naissance);
        $tabloDateCourante = explode('-', date('Y-m-d'));
        /*si le mois de naissance est antérieur au mois courant OU si le mois de naissance est égal
            au mois courant et que le jour de naissance est inférieur ou égal au mois courant alors on retourne
            l'année courante - l'année de naissance*/
        if (($tabloDateNaissance[1] < $tabloDateCourante[1])
            || (($tabloDateNaissance[1] == $tabloDateCourante[1]) &&
                ($tabloDateNaissance[2] <= $tabloDateCourante[2]))
        ) {
            return $tabloDateCourante[0] - $tabloDateNaissance[0];
        } else {
            /*dans les autres cas , on retourne l'année courante - année de naisssance -1*/
            return $tabloDateCourante[0] - $tabloDateNaissance[0] - 1;
        }
    }?>
</head>
<body>
    <?php 
    //echo "<p>contenu de la variable globale SERVER</p>"
    //. print_r($_SERVER, true) . "</pre>";
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $date = htmlspecialchars($_POST['dateNaissance']);
    $mail = htmlspecialchars($_POST['mail']);
    echo $prenom . " " . $nom ;
    echo $date . " " . $mail ;
    $ageUtil = Age($date);
    echo "votre âge : ".$ageUtil;  
    if ($age >= 18 && $age <= 26) {
        echo "Vous êtes jeune.";
    } elseif ($age > 26 && $age <= 50) {
        echo "Vous n'êtes plus très jeune";
    } else {
        echo "Vous faites partie des séniors.";
    }
    $tabloDateNaissance = explode('-', $date_naissance);
        $moisNaissance = $tabloDateNaissance[1];
        echo "<br><p>Concernant votre mois de naissance</p>";
        switch ($moisNaissance) {
            case 1 :
                echo "vous êtes né en janvier";
                break;
            case 2 :
                echo "vous êtes né en février";
                 break;
            case 3 :
                echo "vous êtes né en mars";
                break;
            case 4 :
                echo "vous êtes né en avril";
                break;
            case 5 :
                echo "vous êtes né en mai";
                break;
            default :
            echo "Vous êtes né après mai.";
        }                                                                                                                                                                                                                   
    ?>
</body>
</html>