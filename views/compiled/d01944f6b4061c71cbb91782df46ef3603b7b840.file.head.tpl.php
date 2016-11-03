<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 13:16:20
         compiled from "views\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1711657e4f5509b6103-51375259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd01944f6b4061c71cbb91782df46ef3603b7b840' => 
    array (
      0 => 'views\\head.tpl',
      1 => 1477997331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1711657e4f5509b6103-51375259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57e4f5509f4912_67422274',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e4f5509f4912_67422274')) {function content_57e4f5509f4912_67422274($_smarty_tpl) {?><!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="theme-color" content="#00795f">
        
        <link rel="icon" sizes="192x192" href="img/logo.png">
        <link rel="stylesheet" href="css/main.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <link rel="alternate" type="application/rss+xml" href="http://21281.hosts.ma-cloud.nl" title="Personal Trainer"> 

    </head>
    <body>
    <header>
        <b style="font-size: 35px"><a class="title_header" href="?action=home">Personal Trainer</a></b><br>
        <a class="title_header title_header_under" href="?action=home">Alles over fitness en trainen voor jou</a>
    </header>
    <nav>
        <ul>
            <a href="?action=home"><li>Home</li></a></li>
            <a href="?action=about"><li>About</li></a>
            <a href="?action=schedule"><li>Schema</li></a>
            <a href="?action=contact"><li>Contact</li></a>
        </ul>
        <div class="handle">
            <a>Menu</a>
            <a class="menu">||||</a>
        </div>
    </nav>

    <script>
        $('.handle').on('click', function(){
            $('nav ul').toggleClass('showing');
        });
    </script><?php }} ?>
