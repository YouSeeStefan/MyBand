<?php /* Smarty version Smarty-3.1.18, created on 2016-10-14 11:11:23
         compiled from "views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:478557f4ffd0d54ba5-11222784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca421bab107b2b775730a59672b523b524b4180f' => 
    array (
      0 => 'views\\about.tpl',
      1 => 1476436281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '478557f4ffd0d54ba5-11222784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f4ffd0ddcb50_82653394',
  'variables' => 
  array (
    'aboutContent' => 0,
    'oneItemAbout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4ffd0ddcb50_82653394')) {function content_57f4ffd0ddcb50_82653394($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp64\\www\\MyBand\\libs\\plugins\\modifier.truncate.php';
?><section>
    <article>
        <p>About</p>
    </article>
</section>


<section>
    <article>
    <?php  $_smarty_tpl->tpl_vars['oneItemAbout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItemAbout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aboutContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItemAbout']->key => $_smarty_tpl->tpl_vars['oneItemAbout']->value) {
$_smarty_tpl->tpl_vars['oneItemAbout']->_loop = true;
?>
        <img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItemAbout']->value['image'];?>
"><br>
        <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItemAbout']->value['content'],30);?>
</content>
    <?php } ?>
    </article>
</section><?php }} ?>
