<!DOCTYPE html>
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

{if isset($status_message)}
	{if $validation == "Ok"}
		<p class="userok">{$status_message}</p>
	{else}
		<p class="usererror">{$status_message}</p>
	{/if}
{/if}

</body>
</html>