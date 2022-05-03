<?php
require('app/app.php');

if(isset($_POST['confirmar'])){
    $mysql = new userdata();
    $result = $mysql->verif_username($_POST['username'], $_POST['password']);
    if($result->rowCount() == 0){
        $mysql->add_username($_POST['username'], $_POST['password']);
        redirect('login.php');
    }
    else{
        $view_bag['error'] = "Username existente.";
        $view_bag['title'] = "Registrar";
        $view_bag['name'] = "register";
        view();
    }
}
else{
    $view_bag['error'] = '';
    $view_bag['title'] = "Register";
    $view_bag['name'] = "register";
    view();
}
?>