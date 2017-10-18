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

if($res)
{
$sql1="INSERT INTO friend1 VALUES('','$myemail','$dostemail')";
$res1=mysql_query($sql1);

if($res1)
{
$sql2="DELETE from friend WHERE too='$myemail' AND froom='$dostemail'";
$res2=mysql_query($sql2);

?>
<script language="javascript">
window.location.replace("searchfile.php?id=<?php echo("$id")?>");
</script>
<?php
}
else
{
echo("nope");
}

}

}



?>