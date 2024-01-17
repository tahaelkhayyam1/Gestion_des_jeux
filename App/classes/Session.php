<?php
class Session{
    static public function set($type,$message){
        setcookie($type,$message,time()+2,"/");
    }
    

    static public function logout(){
        session_destroy();
        Redirect::to("login");
        echo 'session out';
    }
} 
 