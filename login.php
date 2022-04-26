<?php
session_start();
require('app/app.php');

if(!isset($_SESSION['username'])){

if(isset($_POST['confirmar'])){
    
    if($_POST['username'] == 'mu' && $_POST['password'] == '1234'){
        $_SESSION['username'] = $_POST['username'];
        redirect('index.php');
    }
    else{
        echo 'errou';
    }

}
else{
    $view_bag['title'] = "Login";
    $view_bag['name'] = "login";
    view();
}
}
else{
    redirect('index.php');
}
?>