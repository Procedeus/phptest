<?php
session_start();
require('app/app.php');
ensure_auth();

$mysql = new mysqldata();

if(isset($_FILES['imagem'])){
    // pega as ultimas 4 letras e deixa tudo minusculo
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "upload/";
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
    $mysql->add_imagem($novo_nome);
}
$view_bag['title'] = "Upload";
$view_bag['name'] = "upload";
view();
?>