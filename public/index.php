<?php

ini_set('display_erros',1);

include 'vendor/autoload.php';



/*
use App\Connection\Connection;

$connection=Connection::getConnection();


$query = 'SELECT * FROM tb_category';

$preparacao = $connection->prepare($query);
$preparacao->execute();

var_dump($preparacao->fetch());

/*while($registro=$preparacao->fetch()){
    var_dump($registro);
}

*/

$routes = include 'config/routes.php';

$url=explode('?', $_SERVER['REQUEST_URI'])[0];


use App\Controller\ErrorController;

if(false ===isset($routes[$url])){
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName=$routes[$url]['controller'];
$methodName=$routes[$url]['method'];

(new $controllerName())->$methodName();

//var_dump($routes[$url]);

/*
$c = new IndexController();
//$c->indexAction();

$c->loginAction();

$p = new ProductController();
$p->listAction();
$p->addAction();
$p->editAction();

$cat = new CategoryController();
$cat->listAction();
$cat->addAction();
$cat->editAction();

*/