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

mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");

$id=$_GET['id'];
$email=$_SESSION['$email'];

if($id=="")

{
?>
<script language="javascript">
window.location.replace("home.php");
</script>

<?php
}
else{
$row="0";

$sql="SELECT email FROM members WHERE id='$id'";
$res=mysql_query($sql);
$email2=mysql_result($res,$row);

if($res)
{

$sql1="INSERT INTO friend VALUES('','$email2','$email');";
$res=mysql_query("$sql1");

if($res)
{
?>
<script language="javascript">
window.location.replace("searchfile.php?id=<?php echo("$id");?>");
</script>
<?php
}
else{echo("not done");}


}

}
}


?>