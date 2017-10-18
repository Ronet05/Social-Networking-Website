<?php
session_start();


	mysql_connect("localhost", "root", "")or die("cannot connect");
                       mysql_select_db("users")or die("connection lost..!!!");

$row="0";
$rec_id=$_GET['id'];
$msg=$_POST['reply'];

if($rec_id)
{

if(!$msg=="")
{
$sql1="SELECT id FROM members WHERE email='{$_SESSION['$email']}'";
$res1=mysql_query($sql1);
$send_id=mysql_result($res1, $row);

$sql2="INSERT INTO messagenoti VALUES('','$send_id','$rec_id')";
$res=mysql_query($sql2);


$sql3="INSERT INTO messages VALUES('','$send_id','$msg','$rec_id')";
$res=mysql_query($sql3);
$certificate="sent";
$_SESSION['$certificate']=$certificate;
?>
<script language="javascript">
window.location.replace('messages.php');
</script>
<?php
}
else
{
?>
<script language="javascript">
window.location.replace('messages.php');
</script>

<?php
}
}
else
{
?>
<script language="javascript">
window.location.replace('messages.php');
</script>

<?php
}

?>