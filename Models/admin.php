<?php



use Database\DB;

class admin {
    private $pdo;

    public function __construct()
    {
        $connexion = new DB();
        $pdo = $connexion->getPdo();
        $this->pdo = $pdo;
        
    }    

//Class  admin
    public function register($data, $imgData) {
        $pdo = $this->pdo;
        $stm = $pdo->prepare('INSERT INTO admin (cni, nom, prenom, password, image) VALUES
        (:cni, :nom, :prenom, :password, :image)');
   
        $stm->bindParam(':cni', $data['cni']);
        $stm->bindParam(':nom', $data['nom']);
        $stm->bindParam(':prenom', $data['prenom']);
       
        $stm->bindParam(':password', $data['password']);
        $stm->bindParam(':image', $imgData, PDO::PARAM_LOB);
        
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
    public function loginadmin($cni, $password) {
        $pdo = $this->pdo;
        $stm = $pdo->prepare('SELECT * FROM admin WHERE cni = :cni');
        $stm->bindParam(':cni', $cni);
        $stm->execute();
        $user = $stm->fetch(PDO::FETCH_ASSOC);
    
        if (!$user) {
            return 'User not found';
        }
    
         if ($password === $user['password']) {
            
            session_start();
           
        
            
            $_SESSION['user_cni'] = $user['cni'];
            $_SESSION['user_nom'] = $user['Nom'];
            $_SESSION['user_prenom'] = $user['prenom'];
            $_SESSION['user_password'] = $user['password'];
            $_SESSION['user_img']=base64_encode($user['image']);
            


            return $user; 




        } else {
            return 'Incorrect password';
        }
    }
    

    


    public function update($data) {
        $pdo = $this->pdo;
        $stm = $pdo->prepare('UPDATE admin SET cni=:cni,nom=:nom, prenom=:prenom, password=:password WHERE 
        cni=:cnifix');
        $stm->bindParam(':cni',$data['cni']);
        $stm->bindParam(':nom',$data['nom']);
        $stm->bindParam(':prenom',$data['prenom']);
        $stm->bindParam(':password',$data['password']);
        $stm->bindParam(':cnifix',$data['cnifix']);
        ;
    
   
            if ($stm->execute()) {
                $_SESSION['user_cni'] =$data['cni'];
                $_SESSION['user_nom'] =$data['nom'];
                $_SESSION['user_prenom'] =$data['prenom'];
                $_SESSION['user_password'] =$data['password'];
                return 'success';

             } else {
                return 'error';
            }
       
    }
    

    





}
