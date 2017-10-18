<style>
body
{
margin:0;
}

</style>

<?php
session_start();
if(isset($_SESSION['$email']))
{
	?>
<html>	
	<script language="javascript">
	window.location.replace("home.php");
	</script>

<?php 
}
else 
{
if(isset($_SESSION['$error']))
{
$error="Login failed";
}
else
{
$error="";
}
	
                                ?>


<head>
</head>
<body background="/images/back.gif">

<form name="f1" method="post" action="check.php">
<table width="100%" height="90" background="./images/black.jpg">
<tr>
<td width="880" ><font face="calibri" color="white" size="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SocialBook</font></td>
<td>

<font  face="Calibri" color="white">E-mail</font>
<br><input type="text" name="t14"></td>
<td>
<font face="calibri" color="white">Password</font>
<br><input type="password" name="t15">
</td>
<td>
<br><input type="submit" value="Login">
</td>
</tr>
<tr>
<td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
<td><font face="calibri" color="white">Forgot your password?</font></td>
<td><font color="red"><?php echo("$error"); ?></font></td>
</tr>
</table>
</form>
</html>
<?php 
}
?>
