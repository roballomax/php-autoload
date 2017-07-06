<?php 
//separa as barras da url para selecionar controlador e action
$uri = $_SERVER['REQUEST_URI'];
$uri_dashs = explode('/', $uri);

//seta o controlador e action default
$controller = 'HomeController';
$action = 'indexAction';

if(count($uri_dashs[1]) > 1){ // seta o controlador caso tenha na url
    $controller = ucfirst($uri_dashs[1]) . "Controller";
}

if(count($uri_dashs) > 2){ // seta a action caso tenha na url
    $action = $uri_dashs[2] . "Action";
}

$controller = new $controller(); //chama o controlador
$actionContent = $controller->$action(); //pega os dados da action

//caso o retorno do controlador seja nulo, ele devolve uma tela em branco para o browser
if(is_null($actionContent)){
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Site de exemplo | <?php echo $controller->page_title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            require_once('view/includes/header.php'); // inclui o html do header
            echo $actionContent; // chama a action para mostrar a página           
            require_once('view/includes/footer.php'); // inclui o html do footer
         ?>
    </body>
</html>