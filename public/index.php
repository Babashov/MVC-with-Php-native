<?php

require '../Core/Router.php';

$router = new Router();

$router->AddRoute('',['controller'=>'Home','action'=>'index']);
$router->AddRoute('posts',['controller'=>'Posts','action'=>'index']);
$router->AddRoute('posts/create',['controller'=>'Posts','action'=>'create']);

$url = $_SERVER['QUERY_STRING'];


if($router->match($url))
{
    var_dump($router->GetParams());
}else{
    echo "Url Not Found";
}

