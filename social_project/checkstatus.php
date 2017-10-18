<?php 
session_start();

mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");

$message=$_POST['t2'];
$email="{$_SESSION['$email']}";

$row="0";
$sql="SELECT username FROM members WHERE email='{$_SESSION['$email']}'";
$res=mysql_query($sql);
$username=mysql_result($res,$row);

$sql1="SELECT sex FROM members WHERE email='{$_SESSION['$email']}'";
$res1=mysql_query($sql1);
$sex=mysql_result($res1,$row);




date_default_timezone_set('Asia/Calcutta');
$date=strftime('%c');

if(!empty($message))
{
$sql="INSERT INTO status VALUES('','".mysql_real_escape_string($message)."','$username','$date','$email')";
$res=mysql_query($sql);

if($res)
{
	header("location:home.php");
}
else 
{
	echo("system ERROR..!!!");
}
}
else 
{
	?>
	<script language="javascript">
	window.location.replace("home.php");
	</script>

<?php 
}
?>
