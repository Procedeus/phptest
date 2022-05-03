<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./views/css/main.css?=<? echo 'k'; ?>" media="screen" />
    <title><?= $view_bag['title'] ?></title>
</head>
<body>
    <?php require($view_bag['name'].".view.php"); ?>
</body>
</html>