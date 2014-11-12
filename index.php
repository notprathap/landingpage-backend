<?php
/**
 * Created by PhpStorm.
 * User: prathap
 * Date: 11/11/14
 * Time: 9:56 AM
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/generated-conf/config.php';

$klein = new \Klein\Klein();

$klein->respond('POST', '/subscriber', function ($request, $response, $service, $app) {
    // if email already exists, do nothing
    $q = new TeacherQuery();
    $teacher = $q->findByEmail($request->param('email'));
    if ($teacher->count() == 0){
        $teacher = new Teacher();
        $teacher->setEmail($request->param('email'));
        $teacher->setName($request->param('name'));
        $teacher->save();
    }

    return true;
});

$klein->dispatch();