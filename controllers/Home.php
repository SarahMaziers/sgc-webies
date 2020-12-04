<?php

class Home
{
    public $header;
    public $links;
   //un objet qui représente la page Home
    public function __construct($header)
    {
        //récupérer les modèles utiles
        $this->header=$header;
        $this->links= NavigationLink::getAllDisplayed();
           // new NavigationLink(); éviter de se répéter --> méthode static
            //new NavigationLink();
    }

    public function render{
        extract(get_object_vars($this)); //extraire toutes les propriétés publiques pour qu'elles soient dispos dans la vue
include('views/home.php'); //chemins relatifs à l'index.php
//responsabilité du controller de charger le bon template (vue)
    }

}