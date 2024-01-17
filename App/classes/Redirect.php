<?php

class Redirect{
    static public function to($page){
        if(!headers_sent()){
            header('Location:'.$page);

        }
        else{
            echo
            '            <script> window.location.href="'.$page.'.php"/</script>

            ';
        }

   

    }
    
} 


