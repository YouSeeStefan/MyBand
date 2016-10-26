<?php /* Smarty version Smarty-3.1.18, created on 2016-10-19 13:51:59
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142757f4f9a5444fb2-38634840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1476816370,
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
?><!-- <div class="search">
    <form action="http://localhost/MyBand">
        <input type="text" name="search" placeholder="Zoeken...">
        <input type="submit" value="Zoeken">
    </form>
</div> -->

<div class="article">
    <section><?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <article>
            <div class="content"><br>
                <img src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"><br>
                <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>            
                <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</content>
                <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e, %B. %Y");?>
</p>
                <p>Certainly elsewhere my do allowance at. The address farther six hearted hundred towards husband. Are securing off occasion remember daughter replying. Held that feel his see own yet. Strangers ye to he sometimes propriety in. She right plate seven has. Bed who perceive judgment did marianne. 

                In up so discovery my middleton eagerness dejection explained. Estimating excellence ye contrasted insensible as. Oh up unsatiable advantages decisively as at interested. Present suppose in esteems in demesne colonel it to. End horrible she landlord screened stanhill. Repeated offended you opinions off dissuade ask packages screened. She alteration everything sympathize impossible his get compliment. Collected few extremity suffering met had sportsman. 

                Examine she brother prudent add day ham. Far stairs now coming bed oppose hunted become his. You zealously departure had procuring suspicion. Books whose front would purse if be do decay. Quitting you way formerly disposed perceive ladyship are. Common turned boy direct and yet. 

                Do so written as raising parlors spirits mr elderly. Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far. Sir but elegance marriage dwelling likewise position old pleasure men. Dissimilar themselves simplicity no of contrasted as. Delay great day hours men. Stuff front to do allow to asked he. </p>
            </div><br>
        </article><?php } ?>
    </section>

    <section style="text-align: center">    
            <ul class="pagination">
              <li><a href="#">«</a></li>
              <li><a href="#">1</a></li>
              <li><a class="active" href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">6</a></li>
              <li><a href="#">7</a></li>
              <li><a href="#">»</a></li>
            </ul>
    </section>
</div>
<?php }} ?>
