<?php
mysqli_connect("localhost", "root", "")or die("cannot connect");
mysqli_select_db("social_project")or die("connection lost..!!!");
$email=$_POST['t14'];
$password=$_POST['t15']; 
$error="login failed";

$row="0";
$sql="SELECT id FROM members WHERE email='$email' and password='$password'";
$result=mysqli_query($sql);
$count=mysqli_num_rows($result);
$id=mysqli_result($result,$row);

if($count==1)
{
 session_start();


$_SESSION['$email']=$email;
$_SESSION['$password']=$password;

$sq1="UPDATE profile set online=1 WHERE id='$id'";
$res1=mysqli_query("$sq1");

header("location:home.php");

}
else 
{
session_start();
$_SESSION['$error']=$error;
?>
<script language="javascript">
window.location.replace('index.php');
</script>

<?php

}
?>