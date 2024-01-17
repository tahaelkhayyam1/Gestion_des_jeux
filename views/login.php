<title>Gestion des Etudiants | Login</title>
 
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= sha256-T+aPohYXbm0fRYDpJLr+zJ9RmYTswGsahAoIsNiMld4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<link rel="stylesheet" href="dist/css/login.css">
                                      

 
<?php
if (!empty($_SESSION['user_cni'])) {
 
Redirect::to('MainPage');
 
  
}

?>

<?php
if(isset($_POST['submit'])){
  $admin=new adminController();
  
  $admin->login();
}
include('views/includes/alerts.php');



 ?>
    <div class="card">
      <h2>Login</h2>
      <form id="admin-login-form" action="" method="POST">
        <label for="cni">cni:</label>
        <input type="text" id="cni" name="cni" required>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" name="submit" value="Se connecter">
        <span class="d-block text-center mt-3">Vous n'avez pas de Compte ? <a href="register">S'inscrire</a></span>

      </form>
    </div>
  </body>
</html>
