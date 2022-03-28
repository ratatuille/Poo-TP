<?php

// Routeur a developper ici ...
class Application {
    public static function run(){

    if (!isset($_SERVER['PATH_INFO'])) {
        $path="";
    }

    if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
    }

    if ($path==''){
        include __DIR__.'/../src/Controller/HomeController.php';
        $controller = new HomeController();
        $controller->home(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/annonces'){
        include __DIR__.'/../src/Controller/AnnoncesController.php';
        $annonces = new AnnoncesController();
        $annonces->annonces(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/toutes_annonces'){
        include __DIR__.'/../src/Controller/AnnoncesController.php';
        $annonces = new AnnoncesController();
        $annonces->toutes_annonces(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/une_annonce'){
        include __DIR__.'/../src/Controller/AnnoncesController.php';
        $annonces = new AnnoncesController();
        $annonces->une_annonce(); //Renvoyer la vue du formulaire de connexion
    }

    if ($path=='/supp_annonce'){
        include __DIR__.'/../src/Controller/AnnoncesController.php';
        $annonces = new AnnoncesController();
        $annonces->supp_annonce(); //Renvoyer la vue du formulaire de connexion
    }

    }
}