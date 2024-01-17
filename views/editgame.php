<title>Gestion des Etudiants | Modifier Etudiant</title>

<?php

if(isset($_POST['id'])){
  $existgame = new GameController();
  $data = array(
      'id' => $_POST['id']
  );
  $game = $existgame->GetGame($data);
 
}
else{
  Redirect::to('home');
}


 
    if(isset($_POST['submit'])){
      $game=new GameController();
      
      $game->updateGame();
    }


?>


 

 
 <link rel="stylesheet" href="dist/css/register.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= sha256-T+aPohYXbm0fRYDpJLr+zJ9RmYTswGsahAoIsNiMld4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="dist/css/login.css">


              <div class="card">
      <h2>Modifier Jeux</h2>
      <form id="admin-registration-form" method="POST" enctype="multipart/form-data">
      <input  id="id" name="id" type="hidden" value="<?php echo $game['id'];?> ">

      <div class="upload">
      <?php echo "<img id='profile-img' src='data:image/jpeg;base64,".base64_encode($game["image"]) . "' class='rounded-circle' width='100' height='100'>"?>
 
    </div>

        

        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required value="<?php echo $game['nom'];?>">

        <label for="playstore">playstore:</label>
        <input type="text" id="playstore" name="playstore"   value="<?php echo $game['playstore'];?>">

        <label for="AppStore">AppStore:</label>
        <input type="text" id="AppStore" name="AppStore"   value="<?php echo $game['AppStore'];?>">
 

         <div id="password-match-message" class="error-message"></div>

        <input type="submit" name="submit" value="Modifier">
      </form>
    </div>

 


    <script>
  var profileImgUpload = document.getElementById('profile-img-upload');
  var profileImg = document.getElementById('profile-img');
  var originalImgSrc = profileImg.src; // Store the original image source

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
          
  