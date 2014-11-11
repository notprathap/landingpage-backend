<?php
/**
 * Created by PhpStorm.
 * User: prathap
 * Date: 11/11/14
 * Time: 9:56 AM
 */

require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/hello-world', function () {
    return 'Hello World!';
});

$klein->respond('GET', '/goodbye-world', function () {
    return 'Goodbye World!';
});

$klein->dispatch();