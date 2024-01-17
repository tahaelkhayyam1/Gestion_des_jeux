<?php

use Database\DB;

    class Game {
    private $pdo;

    public function __construct()
    {
        $connexion = new DB();
        $pdo = $connexion->getPdo();
        $this->pdo = $pdo;
        
    }

     public function getAll()
    {
        $pdo = $this->pdo;
        try{
        $stm = $pdo->prepare('SELECT * FROM games ');
        $stm->execute();
        $result = $stm->fetchAll();
        return $result;
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    }  






    public function getGame($data)
    {
        $id = $data['id'];
        $pdo = $this->pdo;
    
        try {
            $stm = $pdo->prepare('SELECT * FROM  games where id = :id');
            $stm->bindParam(':id', $id);
            $stm->execute();
            $result = $stm->fetchAll();
            return $result;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }










        public function DeleteGame($id) {
        $pdo = $this->pdo;
        $stm = $pdo->prepare('DELETE FROM games WHERE id = :id');
        $stm->bindParam(':id', $id);
        if ($stm->execute()) {
            return 'success';
        } else {
            return 'error';
        }
    }




      




public function AjouterGame($data, $imgData) {
    $pdo = $this->pdo;
    $stm = $pdo->prepare('INSERT INTO games (image, nom, playstore, AppStore) VALUES
     (:image, :nom, :playstore, :AppStore )');

    $stm->bindParam(':image', $imgData, PDO::PARAM_LOB);
    $stm->bindParam(':nom', $data['nom']);
    $stm->bindParam(':playstore', $data['playstore']);
    $stm->bindParam(':AppStore', $data['AppStore']);
 
    
    try {
        if ($stm->execute()) {
            return 'success';
        } else {
            return 'error';
        }
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            return 'La clé primaire existe déjà dans la table';
        } else {
            return 'Une erreur s\'est produite : ' . $e->getMessage();
        }
    }
}





 



 












public function updateGame($data ) {
    $pdo = $this->pdo;
    $stm = $pdo->prepare('UPDATE games SET 
         nom = :nom,
        playstore = :playstore,
        AppStore = :AppStore
        WHERE id = :id');

    $stm->bindParam(':id', $data['id']);
     $stm->bindParam(':nom', $data['nom']);
    $stm->bindParam(':playstore', $data['playstore']);
    $stm->bindParam(':AppStore', $data['AppStore']);
    
    try {
        if ($stm->execute()) {
            return 'success';
        } else {
            return 'error';
        }
    } catch (PDOException $e) {
        return 'Une erreur s\'est produite : ' . $e->getMessage();
    }
}
}


?>