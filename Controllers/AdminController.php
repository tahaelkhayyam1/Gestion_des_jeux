<?php
class adminController{


//AdminController

public function register(){
    if(isset($_POST['submit'])){
        // Récupération des données du formulaire
        $data = array(
            'cni' => $_POST['cni'],
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'password' => $_POST['password'] // Store the plaintext password
        );

        $imgData = file_get_contents($_FILES['img']['tmp_name']);

        // Envoi des données au modèle pour insertion en base de données
        $admin = new Admin();
        $resultat = $admin->register($data, $imgData);

        // Traitement du résultat de l'insertion
        if ($resultat === "success") {
            Redirect::to('login');
            Session::set('info','Inscris Avec succeé');

        } else {
            Session::set('info','Erreur');
        }
    }
}


    public function login(){
        if(isset($_POST['submit'])){
            $cni = $_POST['cni'];
            $password = $_POST['password'];
    
            $admin = new Admin(); // Make sure the class name matches the actual class name
            $result = $admin->loginadmin($cni, $password);
    
            if (is_array($result)) {
                Redirect::to('MainPage');

            } else {
                 Session::set('info','Invalid credentials');
                 Redirect::to('login');

            }
        }
    }
    







public function modifieradmin(){
    if(isset($_POST['submit'])){
        $data=array(
            'cni'=>$_POST['cni'],
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom'],
            'password'=>$_POST['password'],
            'cnifix'=>$_POST['cnifix']);

        $admin=new admin();


            $resultat = $admin->update($data);
       

    
        if($resultat==="success"){
            Redirect::to('profil');
            Session::set('info','Modifié');

         } else {
            echo 'error';
         }
    }
}

}





?>

