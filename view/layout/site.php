<?php 

$uri = $_SERVER['REQUEST_URI'];
$uri_dashs = explode('/', $uri);

$controller = 'HomeController';
$action = 'indexAction';

if(count($uri_dashs[1]) > 1){
    $controller = ucfirst($uri_dashs[1]) . "Controller";
}

if(count($uri_dashs) > 2){
    $action = $uri_dashs[2] . "Action";
}

$controller = new $controller();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Site de exemplo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            require_once('view/includes/header.php');
            $controller->$action();            
            require_once('view/includes/footer.php');
         ?>
    </body>
</html>