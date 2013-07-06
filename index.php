<?php
/**
 * Edit.or v0.0.1
 * Edit.or is an only text ( and code ) editor written in php.
 * **/

require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond( function(){
    $app->tpl = new Template();
    $app->tpl->display( 'index.tpl' );
});

$klein->dispatch( $_SERVER['PATH_INFO'] );