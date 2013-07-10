<?php
/**
 * Edit.or v0.0.1
 * Edit.or is text ( and code ) editor written in php.
 * **/

require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond( function( $request, $response, $app ){
    session_start();
    $app->tpl = new Template();

    $GLOBALS['BASE_DIR'] = __DIR__;
    $GLOBALS['BASE_URL'] = 'Edit.or';

    $GLOBALS['TITLE'] = 'Edit.or';
    $GLOBALS['TEMPLATES'] = $GLOBALS['BASE_DIR'].'/templates';

    $GLOBALS['BOOTSTRAP'] = $GLOBALS['BASE_URL'] . '/vendor/bootstrap';
    $GLOBALS['JS'] = $GLOBALS['BASE_URL']."/includes/js";
    $GLOBALS['CSS'] = $GLOBALS['BASE_URL']."/includes/css";

    $GLOBALS['messages'] = array();

    $app->tpl->assign( 'base_url', $GLOBALS['BASE_URL'] );
    $app->tpl->assign( 'bootstrap', $GLOBALS['BOOTSTRAP'] );
    $app->tpl->assign( 'js', $GLOBALS['JS'] );
    $app->tpl->assign( 'css', $GLOBALS['CSS'] );
    
    $app->tpl->display( 'index.tpl' );
});

//$klein->respond( '/', function( $request, $response, $app ){
//    die( 'hello' );
//    //$app->tpl->display( 'index.tpl' );
//});

$klein->dispatch( $_SERVER['PATH_INFO'] );