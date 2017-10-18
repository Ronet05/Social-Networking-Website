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
 
	$row= 0;
	
	
	mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");



$id=$_GET['id'];

$sql1="SELECT last_name FROM members WHERE id='$id'";
$res1=mysql_query($sql1);
$last=mysql_result($res1, $row);

$last=ucfirst("$last");



$sql3="SELECT image FROM members WHERE id='$id'";
$res3=mysql_query($sql3);
$image=mysql_result($res3, $row);
	
$sql114="SELECT folder FROM members WHERE id='$id'";
$res114=mysql_query($sql114);
$folder=mysql_result($res114, $row);

$sql137="SELECT email FROM members WHERE id='$id'";
$res137=mysql_query($sql137);
$email=mysql_result($res137, $row);



$sql27="SELECT username from members WHERE id='$id'";
$res27=mysql_query($sql27);
$username=mysql_result($res27, $row);

$username=ucfirst("$username");

$sql28="SELECT month from members WHERE id='$id'";
$res28=mysql_query($sql28);
$month=mysql_result($res28, $row);

$sql29="SELECT day from members WHERE id='$id'";
$res29=mysql_query($sql29);
$day=mysql_result($res29, $row);

$sql30="SELECT year from members WHERE id='$id'";
$res30=mysql_query($sql30);
$year=mysql_result($res30, $row);


$sql115="SELECT id FROM friend1 WHERE email1='$email'";
$res115=mysql_query($sql115);
$count115=mysql_num_rows($res115);


$sql116="SELECT id FROM friend1 WHERE email2='$email'";
$res116=mysql_query($sql116);
$count116=mysql_num_rows($res116);


$count117=$count115+$count116;



$sql7="SELECT home FROM profile WHERE id='$id'";
$res7=mysql_query($sql7);
$home=mysql_result($res7, $row);	
	
$home=ucfirst("$home");	



$sql8="SELECT current_city FROM profile WHERE id='$id'";
$res8=mysql_query($sql8);
$current=mysql_result($res8, $row);	
	
$current=ucfirst("$current");


$sql10="SELECT college FROM profile WHERE id='$id'";
$res10=mysql_query($sql10);
$college=mysql_result($res10, $row);


$college=ucfirst("$college");



?>
<head>
<link rel="icon" href="/images/ico.jpg" type="image/x-icon" />
<title>Profile</title></head>
<body background="/images/back.gif">
<?php  include 'head.php'; ?>



<br><br><table width="200" border="0.5" align="left" bgcolor="white">
<tr><td>
<br><table width="180" border="0" align="left" background="/images/white.jpg">
<tr>

<td height="200" align="right"><br><img src="<?php echo"$folder$image";?>" height="200" width="150"></td>
</tr>

<tr>
<td align="left" height="10"><font face="Cracked Johnnie" color="black" size="2">&nbsp; </font>
</tr>


<tr>
<td align="left" height="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Cracked Johnnie" color="black" size="2">Wall</font>
</tr>
<tr>
<td align="left" height="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchfile.php?id=<?php echo("$id"); ?>" style=text-decoration:none><font color="black" size="2">Info</font></a></td>
</tr>
<tr>
<td align="left" height="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="friendss.php?id=<?php echo("$id"); ?>" style=text-decoration:none><font color="black" size="2">Friends</font></a>&nbsp;<font size="2">(<?php echo("$count117");?>)</font></td>
</tr>
<tr>
<td align="left" height="10"><img src="/images/grey.jpg" height="1" width="150"></td>
</tr>
<tr>
<td align="left" height="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black" size="2">Friends</font></td>
</tr>
<tr><td>
<?php

$sql119="SELECT email2 as friend1 FROM friend1 WHERE email1='$email' LIMIT 0,2";
$res119=mysql_query("$sql119");

while ($p=mysql_fetch_array($res119,MYSQL_ASSOC))
{

$l="0";
$friend1email=$p['friend1'];
$sql121="SELECT username FROM members WHERE email='$friend1email'";
$res121=mysql_query($sql121);
$friend1name=mysql_result($res121,$l);

$friend1name=ucfirst("$friend1name");

$sql122="SELECT last_name FROM members WHERE email='$friend1email'";
$res122=mysql_query($sql122);
$friend1last=mysql_result($res122,$l);

$friend1last=ucfirst("$friend1last");

$sql123="SELECT folder FROM members WHERE email='$friend1email'";
$res123=mysql_query($sql123);
$friend1folder=mysql_result($res123,$l);

$sql124="SELECT image FROM members WHERE email='$friend1email'";
$res124=mysql_query($sql124);
$friend1image=mysql_result($res124,$l);

$sql129="SELECT id FROM members WHERE email='$friend1email'";
$res129=mysql_query($sql129);
$friend1id=mysql_result($res129,$l);


echo'<table width="100%"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchfile.php?id='.$friend1id.'"><img src="'.$friend1folder.''.$friend1image.'" height="50" width="50"></a></td><td><b><a href="searchfile.php?id='.$friend1id.'" style=text-decoration:none><font color="black" size="2">'.$friend1name.' '.$friend1last.'</font></a></b></td></tr></table>';
}
?>
</td>
</tr>
<tr><td>
<?php

$sql120="SELECT email1 as friend2 FROM friend1 WHERE email2='$email' LIMIT 0,2";
$res120=mysql_query("$sql120");

while ($k=mysql_fetch_array($res120,MYSQL_ASSOC))
{

$a="0";
$friend2email=$k['friend2'];
$sql125="SELECT username FROM members WHERE email='$friend2email'";
$res125=mysql_query($sql125);
$friend2name=mysql_result($res125,$a);

$friend2name=ucfirst("$friend2name");

$sql126="SELECT last_name FROM members WHERE email='$friend2email'";
$res126=mysql_query($sql126);
$friend2last=mysql_result($res126,$a);

$friend2last=ucfirst("$friend2last");

$sql127="SELECT folder FROM members WHERE email='$friend2email'";
$res127=mysql_query($sql127);
$friend2folder=mysql_result($res127,$a);

$sql128="SELECT image FROM members WHERE email='$friend2email'";
$res128=mysql_query($sql128);
$friend2image=mysql_result($res128,$a);

$sql130="SELECT id FROM members WHERE email='$friend2email'";
$res130=mysql_query($sql130);
$friend2id=mysql_result($res130,$a);


echo'<table width="100%"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchfile.php?id='.$friend2id.'"><img src="'.$friend2folder.''.$friend2image.'" height="50" width="50"></a></td><td><b><a href="searchfile.php?id='.$friend2id.'" style=text-decoration:none><font color="black" size="2">'.$friend2name.' '.$friend2last.'</font></a></b></td></tr></table>';
}
?>

</td></tr>
</table>
</td></tr>
</table>

<table width="680" border="0" align="left" cellpadding="3" cellspacing="10" background="/images/white.jpg">
<tr>
<td width="400" height="100"><font face="Cracked Johnnie" color="black" size="5"><b><?php echo  ($username); echo('&nbsp;'); echo($last);?>'s Friends</b>
</td></tr>
<tr><td>
<?php

$sql119="SELECT email2 as friend1 FROM friend1 WHERE email1='$email'";
$res119=mysql_query("$sql119");

while ($p=mysql_fetch_array($res119,MYSQL_ASSOC))
{

$l="0";
$friend1email=$p['friend1'];
$sql121="SELECT username FROM members WHERE email='$friend1email'";
$res121=mysql_query($sql121);
$friend1name=mysql_result($res121,$l);

$friend1name=ucfirst("$friend1name");

$sql122="SELECT last_name FROM members WHERE email='$friend1email'";
$res122=mysql_query($sql122);
$friend1last=mysql_result($res122,$l);

$friend1last=ucfirst("$friend1last");

$sql123="SELECT folder FROM members WHERE email='$friend1email'";
$res123=mysql_query($sql123);
$friend1folder=mysql_result($res123,$l);

$sql124="SELECT image FROM members WHERE email='$friend1email'";
$res124=mysql_query($sql124);
$friend1image=mysql_result($res124,$l);

$sql129="SELECT id FROM members WHERE email='$friend1email'";
$res129=mysql_query($sql129);
$friend1id=mysql_result($res129,$l);


echo'<table width="300"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchfile.php?id='.$friend1id.'"><img src="'.$friend1folder.''.$friend1image.'" height="50" width="50"></a></td><td align="left"><b><a href="searchfile.php?id='.$friend1id.'" style=text-decoration:none><font color="black">'.$friend1name.' '.$friend1last.'</font></a></b></td></tr></table>';
}
?>
</td>
</tr>
<tr><td>
<?php

$sql120="SELECT email1 as friend2 FROM friend1 WHERE email2='$email'";
$res120=mysql_query("$sql120");

while ($k=mysql_fetch_array($res120,MYSQL_ASSOC))
{

$a="0";
$friend2email=$k['friend2'];
$sql125="SELECT username FROM members WHERE email='$friend2email'";
$res125=mysql_query($sql125);
$friend2name=mysql_result($res125,$a);

$friend2name=ucfirst("$friend2name");

$sql126="SELECT last_name FROM members WHERE email='$friend2email'";
$res126=mysql_query($sql126);
$friend2last=mysql_result($res126,$a);

$friend2last=ucfirst("$friend2last");

$sql127="SELECT folder FROM members WHERE email='$friend2email'";
$res127=mysql_query($sql127);
$friend2folder=mysql_result($res127,$a);

$sql128="SELECT image FROM members WHERE email='$friend2email'";
$res128=mysql_query($sql128);
$friend2image=mysql_result($res128,$a);

$sql130="SELECT id FROM members WHERE email='$friend2email'";
$res130=mysql_query($sql130);
$friend2id=mysql_result($res130,$a);


echo'<table width="300"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchfile.php?id='.$friend2id.'"><img src="'.$friend2folder.''.$friend2image.'" height="50" width="50"></a></td><td align="left"><b><a href="searchfile.php?id='.$friend2id.'" style=text-decoration:none><font color="black">'.$friend2name.' '.$friend2last.'</font></a></b>



</td></tr></table>';
}
?>
</td></tr>
</table>





</td></tr>
</table>



<?php
include 'online.php';
include 'adds.php';
include 'adds1.php';



?>
</html>
<?php 

}
?>