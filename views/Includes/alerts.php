<?php
if(isset($_COOKIE['success'])){
    echo '
    <div class="alert alert-success"  id="success-alert">'.$_COOKIE['success'].'
    </div>
    ';
}

if(isset($_COOKIE['error'])){
    echo '
    <div class="alert alert-danger" id="error-alert" >'.$_COOKIE['error'].'
    </div>
    ';
}
if(isset($_COOKIE['info'])){
    echo '
    <div class="alert alert-info" id="info-alert">'.$_COOKIE['info'].'
    </div>
    ';
}

?>
