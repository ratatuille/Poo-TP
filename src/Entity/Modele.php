<?php
abstract class Modele {
        protected $conn;  
        protected $table;     

        public  function __construct() {  
        include __DIR__.'/../../src/ConnBdd.php';
        $this->conn = ConnBdd::getPdo();
        
    }

        public function findAll() {

        $sql = "SELECT * from $this->table";
        $resultat = $this->conn->query($sql);
        
        $tab = $resultat->fetchAll();
        var_dump($tab);
        }
    
        public function find_All($id) {
    
        $sql = "SELECT * FROM $this->table WHERE idAnnonces=$id";
        $resultat = $this->conn->query($sql);
        
        $tab = $resultat->fetchAll();
        var_dump($tab);
        }
    
        public function delete_All($id) {
    
        $sql = "DELETE FROM $this->table WHERE idAnnonces=$id";
        $resultat = $this->conn->query($sql);
    
        $tab = $resultat->fetchAll();
        var_dump($tab);
        }
}