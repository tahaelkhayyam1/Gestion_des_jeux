<?php

class GameController{

 

public function getAllGames(){

    $games=new Game();
    $game= $games-> getAll();
    return $game;
}


public function GetGame() {
    $games=new Game();
    $data = array();

    if (isset($_POST['id'])) {
        $data['id'] = $_POST['id'];
    }


    $game= $games->getGame($data);
   
    if (isset($game[0])) {
        return $game[0];
    } else {
        return null;
    }
}


public function deleteGame($game){
    if(isset($_POST['submit'])){
            $id=$_POST['id'];
        $game=new Game();
        $resultat= $game-> DeleteGame($id);
        if($resultat==="success"){
            Redirect::to('MainPage');
            Session::set('error','Games Bien Supprimé');
        }
        else{
            echo  $resultat;
        }
    }
}


public function addGame(){
    if(isset($_POST['submit'])){
        $data=array(
            'nom'=>$_POST['nom'],
            'playstore'=>$_POST['playstore'],
            'AppStore'=>$_POST['AppStore'],
 
           
            
              );

        //Récupération des données binaires de l'image
        $imgData = file_get_contents($_FILES['img']['tmp_name']);

        //Envoi des données au modèle pour insertion en base de données
        $game=new Game();
        
        
        $resultat= $game->AjouterGame($data, $imgData);

        //Traitement du résultat de l'insertion
        if($resultat==="success"){
            Redirect::to('MainPage');
            Session::set('success','Game Bien Ajoute');

        }  
}
}










public function updateGame() {
    if(isset($_POST['submit'])){
        // Récupération des données du formulaire
        $data = array(
            'id' => $_POST['id'],
            'nom' => $_POST['nom'],
            'playstore' => $_POST['playstore'],
            'AppStore' => $_POST['AppStore']
        );
         $game = new Game();
        $resultat = $game->updateGame($data);

        // Traitement du résultat de l'insertion
        if($resultat === "success"){
            Redirect::to('MainPage');
            Session::set('info','Game Bien Modifié');
        } else {
            echo "wrong";
        }
    }
}









}


?>