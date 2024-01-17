<title>Gestion des Etudiants | Profil</title>

<?php 
    if(isset($_POST['submit'])){
      $admin=new adminController();
      
      $admin->modifieradmin();
    }
    include('views/includes/alerts.php');
    ?>
 
 
<div class="container">
    <div class="main-body">    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="data:image/jpeg;base64,<?php echo $_SESSION['user_img']?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                     <h4><?php echo $_SESSION['user_nom'].' '.$_SESSION['user_prenom']?> </h4>

                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['user_nom'].' '.$_SESSION['user_prenom']?>
                    </div>
                  </div>
                  <hr>
                  <form id="admin-login-form" action="" method="POST">
                  <input type="text" value="<?php echo $_SESSION['user_cni']?>" hidden name="cnifix" id="cnifix">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">CNI</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" value="<?php echo $_SESSION['user_cni']?>" readonly name="cni" id="cni">

                            </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
         
                    <input type="text" value=" <?php echo $_SESSION['user_nom']?>"readonly  name="nom" id="nom">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prenom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text" value=" <?php echo $_SESSION['user_prenom']?> "readonly name="prenom" id="prenom">

                   
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
    <input type="password" value="<?php echo $_SESSION['user_password']?>" readonly name="password" id="password" class="password-field">
    <span onclick="togglePasswordVisibility()"  class="fa fa-fw fa-eye field-icon toggle-password"></span>
 </div>

                  </div>
                  <hr>
                  <div class="row">
    <div class="col-sm-12">
        <a class="btn btn-warning" onclick="seteditable();">Edit</a>
    </div>
</div>

<div class="row" style="text-align: right;">
    <div class="col-sm-12">
        <button type="submit" class="save btn btn-info" name="submit" id="modifier-button" style="display: none;">Sauvegarder</button>
    </div>
</div>

                </div>
              </div></form>




            </div>
          </div>

        </div>
    </div>

</body>
</html>
<script>
function seteditable() {
    var inputs = document.querySelectorAll("input[readonly]");
    var modifierButton = document.getElementById("modifier-button");

    for (var i = 0; i < inputs.length; i++) {
        inputs[i].readOnly = false;
    }

    // Toggle the visibility of the "Modifier" button
    if (modifierButton.style.display === "none") {
        modifierButton.style.display = "inline-block"; // Show the button
    } else {
        modifierButton.style.display = "none"; // Hide the button
    }
}
 

 

function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var showHideButton = document.querySelector(".show-hide-button");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        showHideButton.textContent = "Hide";
    } else {
        passwordField.type = "password";
        showHideButton.textContent = "Show";
    }
}
</script>

<style>


.field-icon {
 
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
 
    body{
    
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}



input[type="email"], input[type="password"] ,input[type="text"]{
 
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
 
    box-sizing: border-box;
    font-size: 16px;
  }
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    display: block;
    margin: 0 auto;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }

</style>