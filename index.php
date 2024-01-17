<?php
require_once 'autoload.php';
require_once './Controllers/HomeController.php';
 

$home = new HomeController();
$pages=['home','profil','login','AjouterGame','editgame','MainPage','register','about','blog'];

$AdminHeader = ['editgame', 'AjouterGame' ,'MainPage','profil'];
 
 
     if (isset($_GET['page']) && in_array($_GET['page'], $AdminHeader)) {
         require_once 'views/includes/headerAdmin.php';
   
     }
     else if ($_GET['page']=="home" ||$_GET['page']=="about"  )  {
        require_once 'views/includes/header.php';

     }
      





if(isset($_GET['page'])){
    
        $page=$_GET['page'];
        if(in_array($_GET['page'],$pages)){
            $home->index($page);
        }
        else{
            include('views/includes/404.php');
        }



}
else {
    $home->index('home');



}

 
?>