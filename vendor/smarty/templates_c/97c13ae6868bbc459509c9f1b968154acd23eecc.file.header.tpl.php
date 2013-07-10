<?php /* Smarty version Smarty-3.1.14, created on 2013-07-08 22:47:09
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49468923951db79ad30b386-15878521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1373159590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49468923951db79ad30b386-15878521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bootstrap' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51db79ad319726_71866704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51db79ad319726_71866704')) {function content_51db79ad319726_71866704($_smarty_tpl) {?><!doctype html>
    <head>
        <meta name="siteHeader"/>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['bootstrap']->value;?>
/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['bootstrap']->value;?>
/js/bootstrap.min.js"></script>
    </head>
    <body><?php }} ?>