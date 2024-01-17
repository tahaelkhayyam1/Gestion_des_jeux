<?php
if(isset($_POST['logout'])){
  Session::logout();
  }
ob_start();
?>

 
<?php
if (empty($_SESSION['user_cni'])) {
  // user is not logged in
Redirect::to('login');
Session::set("error","Veuillez d'abbord vous connecter");

  exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://cn-studio.com/wp-content/uploads/2022/11/512-300x300.png">

    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"rel="stylesheet"/>
     <link rel="stylesheet" href=" dist/css/ajouter.css">
    <link rel="stylesheet" href=" dist/css/ajouter2.css">

    <link rel="    stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="upf.jpg">

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8= sha256-T+aPohYXbm0fRYDpJLr+zJ9RmYTswGsahAoIsNiMld4=" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> 

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<style>
   body{
    background-color: #e2e8f0;    
}

.navbar {
  width: 106%;
  margin-left: -5%;
    margin-top: -25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0px;
  background-color: #f5f5f5;
  margin-bottom: 70px;
}



.navbar-links {
  display: flex;
  justify-content: space-between;
  list-style: none;
  margin: 0;
  padding: 0;
}

.navbar-links li a {
  font-size: 16px;
  color: #333;
  text-decoration: none;
  padding: 10px;
  transition: color 0.3s ease-in-out;
}

.navbar-links li a:hover {
  color: #fbc531;
}

 
.navbar-right {
    flex-direction: column;
    align-items:flex-end;
    width: 100%;
  }

.navbar-toggle {
  display: none;
}

@media screen and (max-width: 768px) {
  .navbar {
    flex-direction: column;
  }
  
  .navbar-links {
    display: none;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }
  
  .navbar-links li {
    width: 100%;
    text-align: center;
  }
  
  .navbar-toggle {
    display: block;
    cursor: pointer;
  }
  
  .navbar-toggle span {
    display: block;
    height: 2px;
    width: 25px;
    background-color: #333;
    margin: 5px;
    transition: transform 0.3s ease-in-out;
  }
  
  .navbar-toggle.open span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }
  
  .navbar-toggle.open span:nth-child(2) {
    opacity: 0;
  }
  
  .navbar-toggle.open span:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
  }
  
  .navbar-links.open {
    display: flex;
  }
}


table{
  font-size: 14px !important;
}



</style>




<link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
 
<script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

<nav class="navbar">
  <div class="navbar-logo">
    <img src="https://cn-studio.com/wp-content/uploads/2022/11/512-300x300.png" style="height:40px; width:40px;" alt="">
</div>
  <ul class="navbar-links">
    <li><a href="MainPage">Home</a></li>
    <li><a href="AjouterGame">Nouveau Jeux</a></li>
    
  </ul>
  <div class="navbar-toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
   <form method="post" id="form">


  <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 
                            <span class="username"><?php echo $_SESSION['user_nom'].' '.$_SESSION['user_prenom']?> </span>
 </a>


                                <ul class="dropdown-menu">
                                    <li><a href="profil">Profil</a></li>
                                    <li><button name="logout" type="submit" class="btn btn-link">Se Deconnecter</button></li>
                                </ul>
                            </li>
                        </ul>
                        </form>

</nav>




<script>
  const navbarToggle = document.querySelector('.navbar-toggle');
const navbarLinks = document.querySelector('.navbar-links');

navbarToggle.addEventListener('click', () => {
  navbarToggle.classList.toggle('open');
  navbarLinks.classList.toggle('open');
});
</script>



