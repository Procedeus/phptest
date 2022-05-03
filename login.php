<?php
session_start();
require('app/app.php');

$view_bag['error'] = '';

if(!isset($_SESSION['id'])){

    if(isset($_POST['confirmar'])){
        $mysql = new userdata();
        $result = $mysql->verif_username($_POST['username'], $_POST['password']);
        if($result->rowCount() > 0){
            $user = $result->fetch();
            $_SESSION['id'] = $user["id"];
            redirect('index.php');
        }
        else{
            $view_bag['error'] = "Username e/ou Password incorretos.";
            $view_bag['title'] = "Login";
            $view_bag['name'] = "login";
            view();
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