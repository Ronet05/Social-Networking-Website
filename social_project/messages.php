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


$sql1000="DELETE FROM messagenoti WHERE rec_id='$id'";
$res1000=mysql_query($sql1000);




?>
<head>
<link rel="icon" href="/images/ico.jpg" type="image/x-icon" />
<title>Messages</title></head>
<body background="/images/back.gif">
<?php  include 'head.php'; ?>



<br><br><table width="200"  align="left" bgcolor="white" border="1">
<tr align="top"><td align="top">
<table width="180"  align="right"   bgcolor="white" border="0">
<tr>
<td  align="center" >
<br><a href="searchfile.php?id=<?php echo("$id");?>"><img src="<?php echo"$folder$image";?>" height="50" width="50"></a>
<font face="Cracked Johnnie" color="black"> <?php echo"$username  $last";?></font>
</td></tr>
<tr bgcolor="black" height="20"><td> &nbsp;</td></tr>
<tr  height="10"><td align="center"><a href="refresh.php" style=text-decoration:none><font size="2" color="black"> New Posts</font></a></td></tr>
<tr  height="10"><td align="center"><a href="profileedit.php" style=text-decoration:none><font size="2" color="black">Edit profile</font></a></td></tr>
<tr  height="10"><td align="center"><a href="messages.php" style=text-decoration:none><font size="2" color="black">Messages</font></a>&nbsp;</td></tr>
<tr  height="10"><td align="center"><a href="friends.php" style=text-decoration:none><font size="2" color="black">Friends</a>&nbsp;</font><font size="2">(<?php echo("$count117");?>)</font></td></tr>
<tr  height="10"><td align="center"><a href="logout.php" style=text-decoration:none><font size="2" color="black"> Signout</font></a>&nbsp;&nbsp;&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>
<tr  height="10"><td align="center">&nbsp;</td></tr>

</table>
</td></tr>
</table>




<table width="680" border="0" align="left" cellpadding="3" cellspacing="10" background="/images/white.jpg">
<tr>
<td width="400" height="100"><font face="Cracked Johnnie" color="black" size="5"><b><?php echo  ($username); echo('&nbsp;'); echo($last);?></b>
<br><br>Your Messages
</td></tr>
<tr><td>
<?php

$sql119="SELECT id as msgid,message as message,sender_id as sendid FROM messages WHERE rec_id='$id' order by id desc";
$res119=mysql_query("$sql119");

while ($p=mysql_fetch_array($res119,MYSQL_ASSOC))
{

$l="0";
$sendid=$p['sendid'];


$sql121="SELECT first FROM members WHERE id='$sendid'";
$res121=mysql_query($sql121);
$sendername=mysql_result($res121,$l);

$sendername=ucfirst("$sendername");

$sql122="SELECT last FROM members WHERE id='$sendid'";
$res122=mysql_query($sql122);
$senderlast=mysql_result($res122,$l);

$senderlast=ucfirst("$senderlast");

$sql123="SELECT folder FROM members WHERE id='$sendid'";
$res123=mysql_query($sql123);
$senderfolder=mysql_result($res123,$l);

$sql124="SELECT image FROM members WHERE id='$sendid'";
$res124=mysql_query($sql124);
$senderimage=mysql_result($res124,$l);





echo '<form action="reply.php?id='.$sendid.'" method="post"><table bgcolor="white" width="100%"><tr><td width="50">&nbsp;</td><td width="10">&nbsp;</td><td width="300"></td><td align="right"><a href=deletemessage.php?id='.$p['msgid'].' title="Delete your post"><font face="comic sans ms">X</font></a></td></tr><tr><td><a href="searchfile.php?id='.$sendid.'"><img src="'.$senderfolder.''.$senderimage.'" width="50" height="50"></a></td><td width="10">&nbsp;</td><td width="300"><b>'.$sendername.'&nbsp;'.$senderlast.'</b><br><br></td><tr><td>&nbsp;</td><td>&nbsp;</td>
       <td>'.$p['message'].'</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>Reply : <textarea name="reply" cols="40"></textarea></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" value="Reply"></td></tr>';
}
echo'<tr><td height="612">&nbsp;</td></tr></table></form>';
?>
</td>
</tr>
</table>
</td></tr>
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