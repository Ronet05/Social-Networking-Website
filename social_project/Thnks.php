<?php

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
	?>
<head>
<title>SIGNUP</title>
</head>
<body bgcolor="#edf0f5">
<?php
include 'login.php';
?>
<table width="700" align="left">
<tr>
</tr>

<div style="width:80%;margin-left:10%;text-align:center;font-family:calibri;margin-top:10%;"><font color="black" size="6">You have been Registered</font><br>Please Login and update your profile</div>


</body>

</html>
<?php 
}
?>