<?php
/**
 * Created by PhpStorm.
 * User: prathap
 * Date: 11/11/14
 * Time: 9:56 AM
 */

require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond('POST', '/subscriber', function ($request, $response, $service, $app) {
    return print_r($request->param('email'));
});

$klein->respond('POST', '/teacher', function ($request, $response, $service, $app) {
    return print_r($request->param('school').' '.$request->param('name'));
});

$klein->dispatch();