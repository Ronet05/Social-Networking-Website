<?php

session_start();
mysql_connect("localhost", "root", "")or die("cannot connect");
                       mysql_select_db("users")or die("connection lost..!!!");
					   
					   

$employer=$_POST['text1'];
$college=$_POST['text2'];
$school=$_POST['text3'];
$quote=$_POST['text4'];
$song=$_POST['text5'];
$book=$_POST['text6'];
$movie=$_POST['text7'];
$sports=$_POST['text8'];
$serial=$_POST['text9'];
$about=$_POST['text10'];
$interested=$_POST['text11'];
$relation=$_POST['text12'];
$website=$_POST['text15'];
$ph=$_POST['text16'];
$home=$_POST['text17'];
$current=$_POST['text18'];

$row="0";

$Sql0="SELECT id FROM members WHERE email='{$_SESSION['$email']}'";
$res0=mysql_query($Sql0);
$id=mysql_result($res0, $row);

$sql="UPDATE profile SET challenge='".mysql_real_escape_string($quote)."',home='".mysql_real_escape_string($home)."',current='".mysql_real_escape_string($current)."',school='".mysql_real_escape_string($school)."',college='".mysql_real_escape_string($college)."',song='".mysql_real_escape_string($song)."',book='".mysql_real_escape_string($book)."',movie='".mysql_real_escape_string($movie)."',sports='".mysql_real_escape_string($sports)."',tv='".mysql_real_escape_string($serial)."',about='".mysql_real_escape_string($about)."',relationship='".mysql_real_escape_string($relation)."',interested='".mysql_real_escape_string($interested)."',phone='".mysql_real_escape_string($ph)."',website='".mysql_real_escape_string($website)."',company='".mysql_real_escape_string($employer)."' WHERE id='$id'";
$res=mysql_query($sql);

if($res)
{
	?>
	<script language="javascript">
	window.location.replace("profile.php");
	</script> 

<?php 
}
else 
{
echo("connection lost!!!");	
	
}

?>


