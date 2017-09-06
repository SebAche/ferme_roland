<?php
//gestion de la langue à afficher
if(isset($_GET['lang'])){
    $lang = htmlspecialchars($_GET['lang']);
    if ($lang == 'fr'){
       header('Location: '. BASE_HTTP.''); 
    }
} else {
// aucune langue n'est déclarée, on tente de reconnaitre la langue par défaut du navigateur
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

    switch ($lang){
        case "en":
            header('Location: en/');
            break;
        case "es":
            header('Location: es/');
            break;
        case "de":
            header('Location: de/');
            break;
        default:
            $lang = "fr";
    //        header('Location: ');
    //        require("..../index.php");
    //        ('Location: en/');
    }
}
// Texte commun à toutes les trad
include('assets/traductions/commun-lang.php');
// Utiliser le bon fichier de trad si présent où par défaut celui en Français
switch ($lang){
    case "en":
        include('assets/traductions/en-lang.php');
        break;
    case "es":
        include('assets/traductions/es-lang.php');
        break;
    case "de":
        include('assets/traductions/de-lang.php');
        break;
    case "fr":
        include('assets/traductions/fr-lang.php');
        break;
    default:
        header('Location: '.BASE_HTTP);     
}
