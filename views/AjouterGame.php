<title>Gestion des Etudiants | Ajouter jeux</title>

<?php
 
 if(isset($_POST['submit'])){
    $nvGame=new GameController();
    
    $nvGame->addGame();
  }
 

?>
<link rel="stylesheet" href="dist/css/register.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= sha256-T+aPohYXbm0fRYDpJLr+zJ9RmYTswGsahAoIsNiMld4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="dist/css/login.css">

  <body>
    <div class="card">
      <h2>Ajouter jeux</h2>
      <form id="admin-registration-form" method="POST" enctype="multipart/form-data">
      <div class="upload">
      <img id="profile-img" src="dist/img/noprofil.jpg" width="100" height="100" alt="">
      <div class="round">
        <input type="file" id="profile-img-upload" name="img" required>  
        <label for="profile-img-upload" class="upload-btn"><i class="fa fa-camera" style="color: #fff;margin-top:7px;"></i></label>
      </div>
    </div>
      
        <label for="nom">Nom de Jeux:</label>
        <input type="text" id="nom" name="nom" required>

        <label for="playstore">Lien playstore:</label>
        <input type="text" id="playstore" name="playstore" >

        <label for="AppStore">Lien AppStore:</label>
        <input type="text" id="AppStore" name="AppStore" >


         

        <input type="submit" name="submit" value="Créer">
       </form>
    </div>

 
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
          
          