<?php /* Smarty version Smarty-3.1.18, created on 2016-10-19 15:27:33
         compiled from "views\contact.php" */ ?>
<?php /*%%SmartyHeaderCode:1428758063489bb0e38-06560502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f43dac2fddb8e25727ebcd810933576642fab4a6' => 
    array (
      0 => 'views\\contact.php',
      1 => 1476883639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1428758063489bb0e38-06560502',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58063489bd96a6_16109875',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58063489bd96a6_16109875')) {function content_58063489bd96a6_16109875($_smarty_tpl) {?><<?php ?>?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comment = $_POST['comments'];

	$to = "stefan.stekelenburg@gmail.com";
	$message = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\n Message: $comments";

	if(mail($to,$subject, $message)){
		echo "Email sent";
	}
	else {
		echo "Error";
	}
}

?<?php ?>>

<form action="" method="post">
	<p>Name: <br>
	<input type="text" name="name" id=""></p>
	<p>Email: <br>
	<input type="text" name="email" id=""></p>
	<p>Subject: <br>
	<input type="text" name="subject" id=""></p>
	<p>Comment: <br>
	<textarea name="comments" id="" cols="30" rows="10"></textarea></p>
	<p><input type="submit" value="Send" name="submit"></p>
</form><?php }} ?>
