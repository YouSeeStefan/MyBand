<?php /* Smarty version Smarty-3.1.18, created on 2016-10-05 13:14:27
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142757f4f9a5444fb2-38634840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1475673266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1142757f4f9a5444fb2-38634840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4f9a54a2d20_05618603',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f9a54a2d20_05618603')) {function content_57f4f9a54a2d20_05618603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp64\\www\\MyBand\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\MyBand\\libs\\plugins\\modifier.date_format.php';
?><section>
    <article>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"><br>
        <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</content>
        <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e, %B. %Y");?>
</p>
    <?php } ?>
    </article>
</section>


<!--
<<?php ?>?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach ($result as $row=>$oneItem) {
	
	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
    echo '<img src="img/' . $oneItem ['image'] . '" alt="Smiley face"><br>';
	echo '<content>'.$oneItem['content'].'</content>';
	echo '</article>';
}

echo '</section>';-->
<?php }} ?>
