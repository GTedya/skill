<?php


use Controllers\Funds;

require_once 'autoload.php';
header('Content-type: application/json; charset=utf-8');
$urlList = [
  '/funds/' => ['GET'=> Funds::list(),'POST' => Funds::add()]
];
$path = str_replace('/index.php', '' , $_SERVER['REQUEST_URI']);
if (array_key_exists($path, $urlList)){
    return json_encode($urlList[$path][$_SERVER['REQUEST_METHOD']]);
};