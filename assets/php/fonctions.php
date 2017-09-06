<?php
// Cette fonction est en charge d'afficher le badge signalant s'il s'agit d'un marché aujourd'hui ou demain
function alertDay($day){
    $retour ='';
    if(date('N')=== $day){
        $retour = '<span class="badge badge-success">'. TXT_MARCHE_AUJOURDHUI .' !</span>';
    }
    if(intval(date('N')+1)== $day){
        $retour = '<span class="badge badge-info">'. TXT_MARCHE_DEMAIN .' !</span>';
    }
    return $retour;
}