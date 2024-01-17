<title>Gestion des Etudiants | S'inscrire</title>
 
<link rel="stylesheet" href="dist/css/register.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= sha256-T+aPohYXbm0fRYDpJLr+zJ9RmYTswGsahAoIsNiMld4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="dist/css/login.css">
<?php

if(isset($_POST['submit'])){
  $admin=new adminController();
  
  $admin->register();
}
 

?>
  <body>
    <div class="card">
      <h2>S'inscrire</h2>
      <form id="admin-registration-form" method="POST" enctype="multipart/form-data">
      <div class="upload">
      <img id="profile-img" src="dist/img/noprofil.jpg" width="100" height="100" alt="">
      <div class="round">
        <input type="file" id="profile-img-upload" name="img">
        <label for="profile-img-upload" class="upload-btn"><i class="fa fa-camera" style="color: #fff;margin-top:7px;"></i></label>
      </div>
    </div>
        <label for="cni">cni:</label>
        <input type="text" id="cni" name="cni" required>

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>

        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" required>

         
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password">Confirmer le mot de passe:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>

        <div id="password-match-message" class="error-message"></div>

        <input type="submit" name="submit" value="S'inscrire">
        <span class="d-block text-center "> Vous avez déja un Compte<a href="login"> Se Connecter</a>?</span>
      </form>
    </div>

    <script>
   const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirm-password");
const passwordMatchMessage = document.getElementById("password-match-message");
const submitButton = document.querySelector("input[type='submit']");

function validatePasswordMatch() {
  if (passwordInput.value !== confirmPasswordInput.value) {
    passwordMatchMessage.textContent = "Les mots de passe ne correspondent pas";
    submitButton.disabled = true;
  } else {
    passwordMatchMessage.textContent = "";
    submitButton.disabled = false;
  }
}

passwordInput.addEventListener("input", validatePasswordMatch);
confirmPasswordInput.addEventListener("input", validatePasswordMatch);

// Disable submit button initially
submitButton.disabled = true;

    </script>


<script>
  var profileImgUpload = document.getElementById('profile-img-upload');
var profileImg = document.getElementById('profile-img');

// Ajoute un événement onchange à l'élément input de type fichier
profileImgUpload.addEventListener('change', function() {
  // Vérifie si un fichier a été sélectionné
  if (profileImgUpload.files && profileImgUpload.files[0]) {
    // Crée un objet FileReader pour lire le fichier
    var reader = new FileReader();
    reader.onload = function(e) {
      // Met à jour la source de l'image avec l'image sélectionnée
      profileImg.src = e.target.result;
    }
    reader.readAsDataURL(profileImgUpload.files[0]);
  }
});
</script>
</body>

</html>
          
          