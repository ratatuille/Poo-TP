<?php
class AnnoncesController {
    public function annonces(){
        include __DIR__.'/../../templates/annonces.php';
    }

    public function toutes_annonces() {
        include __DIR__.'/../Entity/Annonce.php';
        $a = new Annonce();
        $a->findAll();
    }
    
    public function une_annonce() {
        include __DIR__.'/../Entity/Annonce.php';
        $a = new Annonce();
        $a->findOne(1);
    }
    
    public function supp_annonce() {
        include __DIR__.'/../Entity/Annonce.php';
        $a = new Annonce();
        $a->deleteOne(1);
    }


}