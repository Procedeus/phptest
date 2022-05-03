<?php
session_start();
require('app/app.php');
ensure_auth();

$mysql = new imagedata();
$images = $mysql->get_images($_SESSION['id']);

$view_bag['title'] = "Images";
$view_bag['name'] = "image";
view($images);
?>