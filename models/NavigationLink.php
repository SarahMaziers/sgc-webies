<?php

Class NavigationLink extends Model{
    public $url;
    public $label;
    public $icon;
    //ce que le model doit faire
public function __construct($data)
{
    $this->icon=$data['label'];
     $this->label=$data['label'];
     $this->url=$data['icon'];

}
static public function getAllDisplayed(){
    //1. effectuer la requete en base de données
    $results=static::fetchAll('Select `url`,`icon`,`label` from navigation_links order by `order` asc;');
   // var_dump($results);
    //die();

    //2.creer une instance par ligne recupérée
    foreach ($results as $index => $line)
        $results[$index]=new NavigationLink($line);
    //3.retourner toutes les instances créees
    return $results;
}
}

