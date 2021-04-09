<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$siteMapper = [
    '/hello' => 'hello',
    '/bye' => 'bye'
];

$path = $request->getPathInfo();

if(isset($siteMapper[$path])){
    ob_start();
    extract($request->query->all(), EXTR_SKIP);
    include sprintf(__DIR__.'/../src/pages/%s.php', $siteMapper[$path]);
    $response = new Response(ob_get_clean());
}else{
    $response = new Response('The requested Page is not found', 404);
}

$response->send();