<?php
session_start();
mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");



$row="0";
$sql="SELECT id from members WHERE email='{$_SESSION['$email']}'";
$res=mysql_query($sql);
$id=mysql_result($res, $row);


$statusid=$_GET['id'];




$comment=$_POST['comment'];


if(!empty($comment))
{
$sql1="INSERT INTO comments VALUES('','".mysql_real_escape_string($statusid)."','$id','".mysql_real_escape_string($comment)."')";
$res1=mysql_query($sql1);

if($res1)
{
?>
<script language="javascript">
window.location.replace('home.php');

</script>

<?php
}
else
{
echo("SYSTEM ERROR please repot to the administrator oon facebook");
}
}
else
{
?>
<script language="javascript">
window.location.replace('home.php');

</script>
<?php
}



?>