<?php /* Smarty version Smarty-3.1.12, created on 2020-10-28 17:25:52
         compiled from "C:\xampp\htdocs\pixyjob\tpl\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15294354355f98860781b1b3-94105323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'def76a68db1adab6ff91835e0d169ee09db7313f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pixyjob\\tpl\\header.tpl',
      1 => 1603902349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15294354355f98860781b1b3-94105323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5f98860793ac18_66980414',
  'variables' => 
  array (
    'ImageFond' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f98860793ac18_66980414')) {function content_5f98860793ac18_66980414($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">
<head>
        <title>PixyJob</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="/web/css/base.css" media="screen" />
        <link rel="shortcut icon" href="/web/images/favicon.ico" />
        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
</head>
<body>
<div>
        <div id="HeaderFont">
                <img src=<?php echo $_smarty_tpl->tpl_vars['ImageFond']->value;?>
 alt="Banderole Du Site Web">
                <?php echo $_smarty_tpl->tpl_vars['ImageFond']->value;?>

                <div id="NavigationButton">
                        <ul>
                                <li>ACCUEIL</li>
                                <li>PANIER</li>
                                <li>INSCRIPTION</li>
                                <li>CONNEXION</li>
                        </ul>
                </div>
        </div>
</div><?php }} ?>