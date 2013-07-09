<?php
/**
 * Edit.or v0.0.1
 * Edit.or is an only text ( and code ) editor written in php.
 * **/

require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond( function(){
    session_start();
    $app->tpl = new Template();

    $GLOBALS['BASE_DIR'] = dirname(__FILE__);
    $GLOBALS['BASE_URL'] = $GLOBALS['BASE_DIR'] . '/Edit.or';

    $GLOBALS['TITLE'] = 'Edit.or';
    $GLOBALS['TEMPLATES'] = $GLOBALS['BASE_DIR'].'/templates';

    $GLOBALS['BOOTSTRAP'] = $GLOBALS['BASE_DIR'] . '/vendor/bootstrap';
    $GLOBALS['JS'] = $GLOBALS['BASE_URL']."/includes/js";
    $GLOBALS['CSS'] = $GLOBALS['BASE_URL']."/includes/css";

    $GLOBALS['messages'] = array();

    $app->tpl->assign( 'base_url', $GLOBALS['BASE_URL'] );
    $app->tpl->assign( 'bootstrap', $GLOBALS['BOOTSTRAP'] );
    $app->tpl->assign( 'js', $GLOBALS['JS'] );
    $app->tpl->assign( 'css', $GLOBALS['CSS'] );
});

$klein->respond( '/', function(){
    $app->tpl->display( 'index.tpl' );
});

$klein->dispatch( $_SERVER['PATH_INFO'] );