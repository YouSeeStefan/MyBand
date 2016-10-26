<?php /* Smarty version Smarty-3.1.18, created on 2016-10-19 15:24:04
         compiled from "views\contact.tpl.php" */ ?>
<?php /*%%SmartyHeaderCode:2017158075fe78c2f80-46359507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021c8ad5dfaeae5adc5d8815444ba3ee3b60afc6' => 
    array (
      0 => 'views\\contact.tpl.php',
      1 => 1476883436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2017158075fe78c2f80-46359507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58075fe78f8802_97211778',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58075fe78f8802_97211778')) {function content_58075fe78f8802_97211778($_smarty_tpl) {?><<?php ?>?php
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
