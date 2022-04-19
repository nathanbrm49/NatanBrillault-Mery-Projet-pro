
    <?php
    class Voiture {
       //propriétés
       public $marque;
       public $modele;
       public $annee;
       //…autres propriétes
       //constructeur avec la marque en paramètre
       // function __construct($marqueP, $modeleP)
       // {
       //     $this->marque = $marqueP;
       //     $this->modele = $modeleP;
       // }
       function __construct($marqueP)
       {
           $this->marque = $marqueP;
       }
       //les fonctions set et get
       function setMarque($marqueP){
           $this->marque = $marqueP;
       }
       function getMarque() {
           return $this->marque;
       }
   }  
?>