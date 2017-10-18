<?php
session_start();
if(!isset($_SESSION['$email']))
{
	?>
<html>	
	<script language="javascript">
	window.location.replace("login.php");
	</script>

<?php 
}
else 
{
mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");

$row="0";

$id=$_GET['id'];

$sql="SELECT image FROM members WHERE id='$id'";
$res=mysql_query($sql);
$image=mysql_result($res, $row);

$sql118="SELECT folder FROM members WHERE  id='$id'";
$res118=mysql_query($sql118);
$folder=mysql_result($res118, $row);



 $sql1="SELECT username FROM members WHERE  id='$id'";
$res1=mysql_query($sql1);
$username=mysql_result($res1, $row);

$username=ucfirst("$username");


$sql2="SELECT last_name FROM members WHERE  id='$id'";
$res2=mysql_query($sql2);
$last=mysql_result($res2, $row);

$last=ucfirst("$last");

$sql3="SELECT email FROM members WHERE  id='$id'";
$res3=mysql_query($sql3);
$email=mysql_result($res3, $row);

$sql115="SELECT id FROM friend1 WHERE email1='$email'";
$res115=mysql_query($sql115);
$count115=mysql_num_rows($res115);


$sql116="SELECT id FROM friend1 WHERE email2='$email'";
$res116=mysql_query($sql116);
$count116=mysql_num_rows($res116);


$count117=$count115+$count116;








$sql4="SELECT sex FROM members WHERE  id='$id'";
$res4=mysql_query($sql4);
$sex=mysql_result($res4, $row);


$sql6="SELECT challenge FROM profile WHERE id='$id'";
$res6=mysql_query($sql6);
$challenge=mysql_result($res6, $row);
	

$sql8="SELECT home FROM profile WHERE id='$id'";
$res8=mysql_query($sql8);
$home=mysql_result($res8, $row);

$sql9="SELECT current_city FROM profile WHERE id='$id'";
$res9=mysql_query($sql9);
$current=mysql_result($res9, $row);	

$sql10="SELECT school FROM profile WHERE id='$id'";
$res10=mysql_query($sql10);
$school=mysql_result($res10, $row);

$sql11="SELECT college FROM profile WHERE id='$id'";
$res11=mysql_query($sql11);
$college=mysql_result($res11, $row);

$sql12="SELECT movie FROM profile WHERE id='$id'";
$res12=mysql_query($sql12);
$movie=mysql_result($res12, $row);

$sql13="SELECT book FROM profile WHERE id='$id'";
$res13=mysql_query($sql13);
$book=mysql_result($res13, $row);

$sql14="SELECT song FROM profile WHERE id='$id'";
$res14=mysql_query($sql14);
$song=mysql_result($res14, $row);

$sql15="SELECT sports FROM profile WHERE id='$id'";
$res15=mysql_query($sql15);
$sports=mysql_result($res15, $row);

$sql15="SELECT sports FROM profile WHERE id='$id'";
$res15=mysql_query($sql15);
$sports=mysql_result($res15, $row);

$sql16="SELECT tv FROM profile WHERE id='$id'";
$res16=mysql_query($sql16);
$tv=mysql_result($res16, $row);

$sql17="SELECT about FROM profile WHERE id='$id'";
$res17=mysql_query($sql17);
$about=mysql_result($res17, $row);

$sql18="SELECT relationship FROM profile WHERE id='$id'";
$res18=mysql_query($sql18);
$relationship=mysql_result($res18, $row);

$sql19="SELECT interested FROM profile WHERE id='$id'";
$res19=mysql_query($sql19);
$interested=mysql_result($res19, $row);

$sql20="SELECT website FROM profile WHERE id='$id'";
$res20=mysql_query($sql20);
$website=mysql_result($res20, $row);

$sql21="SELECT phone FROM profile WHERE id='$id'";
$res21=mysql_query($sql21);
$phone=mysql_result($res21, $row);

$sql22="SELECT company FROM profile WHERE id='$id'";
$res22=mysql_query($sql22);
$company=mysql_result($res22, $row);

$sql28="SELECT month from members WHERE id='$id'";
$res28=mysql_query($sql28);
$month=mysql_result($res28, $row);

$sql29="SELECT day from members WHERE id='$id'";
$res29=mysql_query($sql29);
$day=mysql_result($res29, $row);

$sql30="SELECT year from members WHERE id='$id'";
$res30=mysql_query($sql30);
$year=mysql_result($res30, $row);




$e2=$_SESSION['$email'];


$sql1111="SELECT id FROM friend WHERE too='$email' AND froom='$e2'";
$res1111=mysql_query("$sql1111");
$hm=mysql_num_rows($res1111);

$sql1112="SELECT id FROM friend1 WHERE email1='$e2' AND email2='$email'";
$res1112=mysql_query("$sql1112");
$hmm=mysql_num_rows($res1112);

$sql1113="SELECT id FROM friend1 WHERE email1='$email' AND email2='$e2'";
$res1113=mysql_query("$sql1113");
$hmmm=mysql_num_rows($res1113);

if(!$hmm=="0")
{
$req="";
$var="";
}
elseif(!$hmmm=="0")
{
$req="";
$var="";
}
elseif($hm=="0")
{
$req='<img src="/images/friend.jpg">';
$var="sendreq.php";
}
else
{
$req='<img src="/images/sent.jpg">';
$var="searchfile.php";
}

?>
<head>
<link rel="icon" href="/images/ico.jpg" type="image/x-icon" />
<title><?php echo($username);?></title></head>
<body background="/images/back.gif">
<?php
include 'head.php';
?>


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
<td width="400" height="100"><font face="Cracked Johnnie" color="black" size="5"><b><?php echo  ("$username"); echo('&nbsp;'); echo($last);?></b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo("$var");?>?id=<?php echo("$id");?>"> <?php echo("$req"); ?> </a><a href="sendmessage.php?id=<?php echo("$id");?>"><img src="/images/send.jpg"></a><br><br>works at <b><?php echo("$company");?></b>, studied at <b> <?php echo("$college");?></b>, lives in <b><?php echo("$home");?></b>,From <b><?php echo("$current");?></b> <br>
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
include 'adds.php';
include 'adds1.php';
include 'adds2.php';
include 'adds3.php';


?>



</body>
</html>
<?php 
}
?>
