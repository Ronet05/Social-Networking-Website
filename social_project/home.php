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
	
$sql113="SELECT first FROM members WHERE email='{$_SESSION['$email']}'";
$res113=mysql_query($sql113);
$username=mysql_result($res113, $row);

$username=ucfirst("$username");



$sql114="SELECT folder FROM members WHERE email='{$_SESSION['$email']}'";
$res114=mysql_query($sql114);
$folder=mysql_result($res114, $row);

$sql115="SELECT id FROM friend1 WHERE email1='{$_SESSION['$email']}'";
$res115=mysql_query($sql115);
$count115=mysql_num_rows($res115);


$sql116="SELECT id FROM friend1 WHERE email2='{$_SESSION['$email']}'";
$res116=mysql_query($sql116);
$count116=mysql_num_rows($res116);


$count117=$count115+$count116;


$sql4="SELECT id from members WHERE email='{$_SESSION['$email']}'";
$res4=mysql_query($sql4);
$id=mysql_result($res4, $row);

$sql5="SELECT challenge FROM profile WHERE id='$id'";
$res5=mysql_query($sql5);
$challenge=mysql_result($res5, $row);	
	
$sql6="SELECT sex FROM members WHERE id='$id'";
$res6=mysql_query($sql6);
$sex=mysql_result($res6, $row);	
	
$sql7="SELECT home FROM profile WHERE id='$id'";
$res7=mysql_query($sql7);
$home=mysql_result($res7, $row);	
	
	
$sql8="SELECT current FROM profile WHERE id='$id'";
$res8=mysql_query($sql8);
$current=mysql_result($res8, $row);	
	
$sql9="SELECT school FROM profile WHERE id='$id'";
$res9=mysql_query($sql9);
$school=mysql_result($res9, $row);	
	
$sql10="SELECT college FROM profile WHERE id='$id'";
$res10=mysql_query($sql10);
$college=mysql_result($res10, $row);


?>
<html>
<head>
<title>home</title></head>
<body background="/images/back.gif">

<?php
include 'head.php';
?>

<html>
<head>
<link rel="icon" href="/images/ico.jpg" type="image/x-icon" />
<title>home</title>
</head>
</html>

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
</table>
</td></tr>
</table>
<?php

if(!isset($_SESSION['assign']))
{
$assign="status.php";
$statuscolor="red";
$imagecolor="black";
$videocolor="black";
}
elseif(!$_SESSION['assign'])
{
$assign="status.php";
$statuscolor="red";
$imagecolor="black";
$videocolor="black";
}
elseif($_SESSION['assign']=='status.php')
{
$assign="status.php";
$statuscolor="red";
$imagecolor="black";
$videocolor="black";
}
elseif($_SESSION['assign']=='image.php')
{
$assign="image.php";
$statuscolor="black";
$imagecolor="red";
$videocolor="black";
}
elseif($_SESSION['assign']=='video.php')
{
$assign="video.php";
$statuscolor="black";
$imagecolor="black";
$videocolor="red";
}





?>




<table width="680" border="0" align="left" cellpadding="6" cellspacing="20" background="/images/white.jpg">
<tr>
<td><font face="cracked johnnie" color="black">New Posts</font><br>
<img src="/images/black.jpg" width="600" height="2"><br><br>Share: <a href="statusactive.php" style=text-decoration:none><font color="<?php echo($statuscolor);?>">Status</font></a> | <a href="imageactive.php" style=text-decoration:none><font color="<?php echo($imagecolor);?>">Image</font></a> | <a href="videoactive.php" style=text-decoration:none><font color="<?php echo($videocolor);?>">Video</font></a><br>
<?php

include "$assign";
?>
</td>
</tr>
<tr>
<td>
<?php 

$sl="SELECT message as message, email as username from status order by id desc LIMIT 0,20";
$rs=mysql_query($sl);

while ($k=mysql_fetch_array($rs,MYSQL_ASSOC))
{



$msg=$k['message'];
$user=$k['username'];
	
                           $sql113="SELECT first FROM members WHERE email='{$_SESSION['$email']}'";
                           $res113=mysql_query($sql113);
                           $username=mysql_result($res113, $row);	

                           $sql114="SELECT id FROM status WHERE message='".mysql_real_escape_string($msg)."'";
                           $res114=mysql_query($sql114);
                           $msgid=mysql_result($res114, $row);


                        $sl0="SELECT image from members where email='$user'";
	$rs0=mysql_query($sl0);
	$img=mysql_result($rs0, $row);
	
	$sl2="SELECT folder from members where email='$user'";
	$rs2=mysql_query($sl2);
	$fol=mysql_result($rs2, $row);

	$sl3="SELECT id from members where email='$user'";
	$rs3=mysql_query($sl3);
	$id2=mysql_result($rs3, $row);                     

                        $sl4="SELECT last from members where email='$user'";
	$rs4=mysql_query($sl4);
	$last1=mysql_result($rs4, $row);  
                         
                        
                           $sl4="SELECT first from members where email='$user'";
	$rs4=mysql_query($sl4);
	$firstname=mysql_result($rs4, $row);  
                          
                      




                       if($username==$firstname)
                       {
                              $close="X";
                         }
                         else
                          {
                            $close="";
                            }




                        $capuser=$firstname;
                        $capuser=ucfirst("$capuser");
                        $last1=ucfirst("$last1");

$query="SELECT sender_id as commenter,comment as comment FROM comments";
$done=mysql_query($query);





	
	echo '<table bgcolor="white" width="100%"><tr><td width="50">&nbsp;</td><td width="10">&nbsp;</td><td width="300">&nbsp;</td><td align="right"><a href=deletestatus.php?id='.$msgid.' title="Delete your post"><font face="comic sans ms">'.$close.'</font></a></td></tr><tr><td width="50"><a href="searchfile.php?id='.$id2.'"><img src="'.$fol.''.$img.'" width="50" height="50"></a></td><td width="10">&nbsp;</td><td width="300"><b>'.$capuser.'&nbsp;'.$last1.'</b><br><br></td><tr><td width="50">&nbsp;</td><td width="10">&nbsp;</td>
       <td width="300">'.$k['message'].'</td>&nbsp;</td></tr></table>';

$query="SELECT id as commentid,status_id as status,sender_id as commenter,comment as comment FROM comments WHERE status_id='$msgid' order by id asc";
$done=mysql_query($query);

echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table align="center" width="300"  bgcolor="black">';

while ($g=mysql_fetch_array($done,MYSQL_ASSOC))

{

$commentid=$g['commentid'];
$commenterid=$g['commenter'];
$comment=$g['comment'];

$sel1="SELECT folder FROM members WHERE id='$commenterid' ";
$rel1=mysql_query($sel1);
$commenterfolder=mysql_result($rel1,$row);

$sel2="SELECT image FROM members WHERE id='$commenterid' ";
$rel2=mysql_query($sel2);
$commenterimage=mysql_result($rel2,$row);

$sel3="SELECT first FROM members WHERE id='$commenterid' ";
$rel3=mysql_query($sel3);
$commenterusername=mysql_result($rel3,$row);



if($id==$commenterid)
{
$cloose="x";

}
else
{
$cloose="";
}


echo'<tr><td width="50" align="left"><a href="searchfile.php?id='.$commenterid.'" title="'.$commenterusername.'"><img src="'.$commenterfolder.''.$commenterimage.'" width="30" height="30" ></a></td><td width="200"><font color="white" size="2">&nbsp;&nbsp;'.$g['comment'].'</font></td><td width="50"><a href="deletecomment.php?id='.$commentid.'"><font color="red">'.$cloose.'</font></a></td></tr>';

}
echo'';

echo'<tr height="30"><td width="50" height="30">&nbsp;</td><td width="200" height="30"><form action="comment.php?id='.$msgid.'" method="post"><br><table height="30"><tr><td width="50" height="30"><img src="'.$folder.''.$image.'" height="30" width="30"></td><td width="100" height="30"><input type="text" name="comment"></td><td width="50"><input type="submit" value="comment"></td><td width="50" height="30">&nbsp;</td></tr></table></tr></td></table></form>';






}







?>







</td>
</tr>

</table>
</form>
<?php
include 'online.php';
include'birthday.php';
include'workshops.php';
include'adds.php';
include'adds1.php';
include'adds2.php';
?>




</body>
</html>
<?php 

}
?>