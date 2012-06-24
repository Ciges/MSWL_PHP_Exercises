<?php /* Smarty version Smarty-3.1.8, created on 2012-06-24 19:51:00
         compiled from "templates/userlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18032913734fe7538498db46-76791386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a97956315d2828ef64581a45d5bfa186dc319d' => 
    array (
      0 => 'templates/userlogin.tpl',
      1 => 1340559661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18032913734fe7538498db46-76791386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status_message' => 0,
    'validation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fe75384a26888_61460633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fe75384a26888_61460633')) {function content_4fe75384a26888_61460633($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>User login</title>
<style type="text/css">
	p.userok,
	p.usererror	{
		margin-top: 1em;
		margin-left: 1em;
	}
	p.userok	{
		color: black;
	}
	p.usererror	{
		color: red;
	}
</style>
</head>
<body>

<form id='login' action='userlogin.php' method='post' accept-charset='UTF-8'>
	<fieldset >
	<legend>Please introduce your user id and password</legend>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<label for='username' >User ID:</label>
	<input type='text' name='username' id='username'  maxlength="50" />
	<label for='password' >Password:</label>
	<input type='password' name='password' id='password' maxlength="50" />
	<input type='submit' name='Submit' value='Submit' />
	</fieldset>
</form>

<?php if (isset($_smarty_tpl->tpl_vars['status_message']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['validation']->value=="Ok"){?>
		<p class="userok"><?php echo $_smarty_tpl->tpl_vars['status_message']->value;?>
</p>
	<?php }else{ ?>
		<p class="usererror"><?php echo $_smarty_tpl->tpl_vars['status_message']->value;?>
</p>
	<?php }?>
<?php }?>

</body>
</html><?php }} ?>