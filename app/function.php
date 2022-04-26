<?php

function view(){
    global $view_bag;
    require("views/layout.view.php");
}

function redirect($url){
    header("Location: $url");
    die();
}

function is_auth(){
    return isset($_SESSION['username']);
}

function ensure_auth(){
    if(!is_auth()){
        redirect('login.php');
    }
}
?>