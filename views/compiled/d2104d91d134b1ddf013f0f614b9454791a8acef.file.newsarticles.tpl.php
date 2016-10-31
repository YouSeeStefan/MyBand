<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 13:58:19
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142757f4f9a5444fb2-38634840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1477918672,
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
    'total_number_articles' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f4f9a54a2d20_05618603')) {function content_57f4f9a54a2d20_05618603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp64\\www\\MyBand\\libs\\plugins\\modifier.date_format.php';
?><!-- <div class="search">
    <form action="http://localhost/MyBand">
        <input type="text" name="search" placeholder="Zoeken...">
        <input type="submit" value="Zoeken">
    </form>
</div> -->

<script>
            function showUser(str) {
              if (str=="") {
                document.getElementById("txtHint").innerHTML="";
                return;
              } 
              if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
              } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  document.getElementById("txtHint").innerHTML=this.responseText;
                }
              }
              xmlhttp.open("GET","model/getuser.php?q="+str,true);
              xmlhttp.send();
            }
        </script>

<div class="article">
    <section class="section-boven">
        <article>
            <div class="content">
                <form>
                    <input type="type" placeholder="Zoeken..." onkeyup="showUser(this.value)">
                </form>
                <div id="txtHint"></div>
            </div>
        </article>
    </section>
</div>

<div class="article">
    <section><?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <article>
            <div class="content"><br>
                <img class="img" src="img/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
"><br><br>
                <b style="font-size: 22px;"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</b><br>
                <i style="font-size: 10px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e, %B. %Y");?>
</i>
                <p><content><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</content></p>
            </div><br>
        </article><?php } ?>
    </section>
    <section style="text-align: center">
            <ul class="pagination">
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['total_number_articles']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['total_number_articles']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                   <li><a href="index.php?action=home&page_number=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
               <?php }} ?>
            </ul>
    </section>
</div>

<!-- truncate:30 --><?php }} ?>
