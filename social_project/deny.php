<?php
session_start();
if(!isset($_SESSION['$email']))
{
	?>
<html>	
	<script language="javascript">
	window.location.replace("index.php");
	</script>

<?php 
}
else 
{

$myemail=$_SESSION['$email'];
$id=$_GET['id'];

mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");

$row="0";

$sql="SELECT email FROM members WHERE id='$id'";
$res=mysql_query($sql);
$dostemail=mysql_result($res,$row);

$sql1="DELETE FROM friend WHERE too='$myemail' AND froom='$dostemail'";
$res1=mysql_query($sql1);

if($res1)
{
?>
<script language="javascript">
window.location.replace("friendrequests.php");
</script>
<?php

}





}



?>