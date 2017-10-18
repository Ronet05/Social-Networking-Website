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

$sql1="SELECT last FROM members WHERE email='{$_SESSION['$email']}'";
$res1=mysql_query($sql1);
$last=mysql_result($res1, $row);

$last=ucfirst("$last");


$sql2="SELECT email FROM members WHERE email='{$_SESSION['$email']}'";
$res2=mysql_query($sql2);
$email=mysql_result($res2, $row);

$sql3="SELECT image FROM members WHERE email='{$_SESSION['$email']}'";
$res3=mysql_query($sql3);
$image=mysql_result($res3, $row);
	
$sql114="SELECT folder FROM members WHERE email='{$_SESSION['$email']}'";
$res114=mysql_query($sql114);
$folder=mysql_result($res114, $row);

$sql4="SELECT id from members WHERE email='{$_SESSION['$email']}'";
$res4=mysql_query($sql4);
$id=mysql_result($res4, $row);

$sql27="SELECT first from members WHERE email='{$_SESSION['$email']}'";
$res27=mysql_query($sql27);
$username=mysql_result($res27, $row);

$username=ucfirst("$username");

$sql28="SELECT month from members WHERE email='{$_SESSION['$email']}'";
$res28=mysql_query($sql28);
$month=mysql_result($res28, $row);

$sql29="SELECT day from members WHERE email='{$_SESSION['$email']}'";
$res29=mysql_query($sql29);
$day=mysql_result($res29, $row);

$sql30="SELECT year from members WHERE email='{$_SESSION['$email']}'";
$res30=mysql_query($sql30);
$year=mysql_result($res30, $row);


$sql115="SELECT id FROM friend1 WHERE email1='{$_SESSION['$email']}'";
$res115=mysql_query($sql115);
$count115=mysql_num_rows($res115);


$sql116="SELECT id FROM friend1 WHERE email2='{$_SESSION['$email']}'";
$res116=mysql_query($sql116);
$count116=mysql_num_rows($res116);


$count117=$count115+$count116;


$sql5="SELECT challenge FROM profile WHERE id='$id'";
$res5=mysql_query($sql5);
$challenge=mysql_result($res5, $row);	
	
$challenge=ucfirst("$challenge");

$sql6="SELECT sex FROM members WHERE id='$id'";
$res6=mysql_query($sql6);
$sex=mysql_result($res6, $row);	
	
$sex=ucfirst("$sex");


$sql7="SELECT home FROM profile WHERE id='$id'";
$res7=mysql_query($sql7);
$home=mysql_result($res7, $row);	
	
$home=ucfirst("$home");	



$sql8="SELECT current FROM profile WHERE id='$id'";
$res8=mysql_query($sql8);
$current=mysql_result($res8, $row);	
	
$current=ucfirst("$current");


$sql9="SELECT school FROM profile WHERE id='$id'";
$res9=mysql_query($sql9);
$school=mysql_result($res9, $row);	
	
$school=ucfirst("$school");


$sql10="SELECT college FROM profile WHERE id='$id'";
$res10=mysql_query($sql10);
$college=mysql_result($res10, $row);


$college=ucfirst("$college");

$sql12="SELECT movie FROM profile WHERE id='$id'";
$res12=mysql_query($sql12);
$movie=mysql_result($res12, $row);


$movie=ucfirst("$movie");


$sql13="SELECT book FROM profile WHERE id='$id'";
$res13=mysql_query($sql13);
$book=mysql_result($res13, $row);

$book=ucfirst("$book");


$sql14="SELECT song FROM profile WHERE id='$id'";
$res14=mysql_query($sql14);
$song=mysql_result($res14, $row);

$song=ucfirst("$song");


$sql15="SELECT sports FROM profile WHERE id='$id'";
$res15=mysql_query($sql15);
$sports=mysql_result($res15, $row);

$sports=ucfirst("$sports");

$sql16="SELECT tv FROM profile WHERE id='$id'";
$res16=mysql_query($sql16);
$tv=mysql_result($res16, $row);

$tv=ucfirst("$tv");

$sql17="SELECT about FROM profile WHERE id='$id'";
$res17=mysql_query($sql17);
$about=mysql_result($res17, $row);

$about=ucfirst("$about");

$sql18="SELECT relationship FROM profile WHERE id='$id'";
$res18=mysql_query($sql18);
$relationship=mysql_result($res18, $row);

$relationship=ucfirst("$relationship");

$sql19="SELECT interested FROM profile WHERE id='$id'";
$res19=mysql_query($sql19);
$interested=mysql_result($res19, $row);

$interested=ucfirst("$interested");

$sql20="SELECT website FROM profile WHERE id='$id'";
$res20=mysql_query($sql20);
$website=mysql_result($res20, $row);

$sql21="SELECT phone FROM profile WHERE id='$id'";
$res21=mysql_query($sql21);
$phone=mysql_result($res21, $row);

$sql22="SELECT company FROM profile WHERE id='$id'";
$res22=mysql_query($sql22);
$company=mysql_result($res22, $row);

$company=ucfirst("$company");

?>
<head>
<link rel="icon" href="/images/ico.jpg" type="image/x-icon" />
<title>Profile</title></head>
<body background="/images/back.gif">
<?php  include 'head.php'; ?>



<br><br><table width="200" border="0.5" align="left" bgcolor="white">
<tr><td>
<table width="180" border="0" align="left" background="./images/white.jpg">
<tr>

<td height="200" align="right"><br><img src="<?php echo"$folder$image";?>" height="200" width="150"></td>
</tr>

<tr>
<td align="left" height="10"><font face="Cracked Johnnie" color="black" size="2">&nbsp; </font>
</tr>


<tr>
<td align="left" height="10"><font face="Cracked Johnnie" color="black" size="2">&nbsp; &nbsp; &nbsp; &nbsp; Wall</font>
</tr>
<tr>
<td align="left" height="10"><a href="profile.php" style=text-decoration:none><font color="black" size="2">&nbsp; &nbsp; &nbsp; &nbsp; Info</font></a></td>
</tr>
<tr>
<td align="left" height="10"><a href="friends.php" style=text-decoration:none><font color="black" size="2">&nbsp; &nbsp; &nbsp; &nbsp; Friends</font></a> &nbsp; <font size="2">(<?php echo("$count117");?>)</font></td>
</tr>
<tr>
<td align="left" height="10"><img src="/images/grey.jpg" height="1" width="150"></td>
</tr>
<tr>
<td align="left" height="10"><font color="black" size="2"><b>&nbsp; &nbsp; &nbsp; &nbsp; Friends</b></font></td>
<tr><td>
<?php

$sql119="SELECT email2 as friend1 FROM friend1 WHERE email1='{$_SESSION['$email']}' LIMIT 0,2";
$res119=mysql_query("$sql119");

while ($p=mysql_fetch_array($res119,MYSQL_ASSOC))
{

$l="0";
$friend1email=$p['friend1'];
$sql121="SELECT first FROM members WHERE email='$friend1email'";
$res121=mysql_query($sql121);
$friend1name=mysql_result($res121,$l);

$friend1name=ucfirst("$friend1name");

$sql122="SELECT last FROM members WHERE email='$friend1email'";
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


echo'<table width="100%"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchfile.php?id='.$friend1id.'"><img src="'.$friend1folder.''.$friend1image.'" height="50" width="50"></a></td><td align="left"><b><a href="searchfile.php?id='.$friend1id.'" style=text-decoration:none><font color="black" size="2">'.$friend1name.' '.$friend1last.'</font></a></b></td></tr></table>';
}
?>
</td>
</tr>
<tr><td>
<?php

$sql120="SELECT email1 as friend2 FROM friend1 WHERE email2='{$_SESSION['$email']}' LIMIT 0,2";
$res120=mysql_query("$sql120");

while ($k=mysql_fetch_array($res120,MYSQL_ASSOC))
{

$a="0";
$friend2email=$k['friend2'];
$sql125="SELECT first FROM members WHERE email='$friend2email'";
$res125=mysql_query($sql125);
$friend2name=mysql_result($res125,$a);

$friend2name=ucfirst("$friend2name");

$sql126="SELECT last FROM members WHERE email='$friend2email'";
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


echo'<table width="100%"><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchfile.php?id='.$friend2id.'"><img src="'.$friend2folder.''.$friend2image.'" height="50" width="50"></a></td><td align="left"><b><a href="searchfile.php?id='.$friend2id.'" style=text-decoration:none><font color="black" size="2">'.$friend2name.' '.$friend2last.'</font></a></b></td></tr></table>';
}
?>
</td></tr>
</table></tr></td>
</table>

<table width="680" border="0" align="left" cellpadding="3" cellspacing="10" background="/images/white.jpg">
<tr>
<td width="400" height="100"><font face="Cracked Johnnie" color="black" size="5"><b><?php echo  ($username); echo('&nbsp;'); echo($last);?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="profileedit.php"><img src="./images/update.jpg"></a></font><br><br>works at <b><?php echo("$company");?></b>, studied at <b> <?php echo("$college");?></b>, lives in <b><?php echo("$home");?></b>,From <b><?php echo("$current");?></b> <br>
Born on <b><?php echo ("$day");?><?php echo ("$month");?><?php echo ("$year");?></b>
</td>
</tr>
<tr ><td background="/images/grey.jpg" width="600" height="20"><font color="white"><b>Education And Work<b></font></td></tr>
<tr><td>
     <table width="500">
    <tr>
   <td><font color="black"><b>Employer</b></font></td>
    <td><font color="black"><?php echo("$company"); ?></font></td>
</tr><tr>   
<td><font color="black"><b>College<b></font></td>
     <td><font color="black"><?php echo("$college"); ?></font></td>
     </tr>
      <tr>   
<td><font color="black"><b>School<b></font></td>
     <td><font color="black"><?php echo("$school"); ?></font></td>
     </tr>
    </table>
</td>
</tr>
<tr ><td background="/images/grey.jpg" width="600" height="20"><font color="white"><b>Philosophy<b></font></td></tr>
<tr><td>
     <table width="500">
    <tr>
   <td><font color="black"><b>Favourite Quote</b></font></td>
    <td><font color="black"><?php echo("$challenge"); ?></font></td>
     </tr>
    </table>
</td>
</tr>
<tr ><td background="/images/grey.jpg" width="600" height="20"><font color="white"><b>Art and Entertainment<b></font></td></tr>
<tr><td>
     <table width="500">
    <tr>
   <td><font color="black"><b>Favourite Song</b></font></td>
    <td><font color="black"><?php echo("$song"); ?></font></td>
     </tr>
    <tr>
   <td><font color="black"><b>Favourite Book</b></font></td>
    <td><font color="black"><?php echo("$book"); ?></font></td>
     </tr>
    <tr>
   <td><font color="black"><b>Favourite Movie</b></font></td>
    <td><font color="black"><?php echo("$movie"); ?></font></td>
     </tr>
   </table>
</td>
</tr>
<tr ><td background="/images/grey.jpg" width="600" height="20"><font color="white"><b>Activities and Interest<b></font></td></tr>
<tr><td>
     <table width="500">
    <tr>
   <td><font color="black"><b>Favourite Sports</b></font></td>
    <td><font color="black"><?php echo("$sports"); ?></font></td>
 </tr><tr>    
<td><font color="black"><b>TV Serials<b></font></td>
<td><font color="black"><?php echo("$tv");?></font></td>
</tr>
    </table>
</td>
</tr>
<tr ><td background="/images/grey.jpg" width="600" height="20"><font color="white"><b>Basic Information<b></font></td></tr>
<tr><td>
     <table width="500">
    <tr>
   <td><font color="black"><b>About You</b></font></td>
    <td><font color="black"><?php echo("$about"); ?></font></td>
 </tr><tr>    
<td><font color="black"><b>Interested in<b></font></td>
<td><font color="black"><?php echo("$interested"); ?></font></td>
</tr>
    <tr>    
<td><font color="black"><b>Relationship<b></font></td>
<td><font color="black"><?php echo("$relationship"); ?></font></td>
</tr>
<tr>    
<td><font color="black"><b>Sex<b></font></td>
<td><font color="black"><?php echo("$sex"); ?></font></td>
</tr>
</table>
</td>
</tr>
<tr ><td background="/images/grey.jpg" width="600" height="20"><font color="white"><b>Contact Information<b></font></td></tr>
<tr><td>
     <table width="500">
    <tr>
   <td><font color="black"><b>E-mail</b></font></td>
    <td><font color="black"><?php echo($email); ?></font></td>
 </tr><tr>    
<td><font color="black"><b>Website<b></font></td>
<td><font color="black"><?php echo("$website");?></font></td>
</tr>
    <tr>    
<td><font color="black"><b>Phone number<b></font></td>
<td><font color="black"><?php echo("$phone");?></font></td>
</tr>
</table>
</td>
</tr>
</table>
<?php
include 'online.php';
include 'birthday.php';
include 'adds.php';
include 'adds1.php';
include 'adds2.php';
include 'adds3.php';
?>
</html>
<?php 

}
?>