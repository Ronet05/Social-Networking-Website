<?php
$sql115="SELECT id FROM friend WHERE too='{$_SESSION['$email']}'";
$res115=mysql_query($sql115);
$number=mysql_num_rows($res115);

if($number=="0")
{

$color="/images/lblack.jpg";
$friend="F";
}
else
{
$friend="$number";
$color="/images/red.jpg";
}


$row="0";
$sql216="SELECT id FROM members WHERE email='{$_SESSION['$email']}'";
$res216=mysql_query($sql216);
$userid=mysql_result($res216,$row);



$sql215="SELECT id FROM messagenoti WHERE rec_id='$userid'";
$res215=mysql_query($sql215);
$number1=mysql_num_rows($res215);

if($number1=="0")
{
$color1="/images/lblack.jpg";
$message="M";
}
else
{
$message="$number1";
$color1="/images/red.jpg";
}

?>


<form action="search.php" method="post">
<table align="left" background="./images/black.jpg" width="1080">
<tr>
<td > <font face="calibri" color="white" size="5">  &nbsp; &nbsp; &nbsp; Socialbook</font>
</td><td width="20" background="<?php echo("$color");?>">&nbsp;<a href="friendrequests.php" title="Friend requests" style=text-decoration:none><font  color="white" size="2"> <b><?php echo("$friend");?></b></font></a></td>
<td width="20" background="<?php echo("$color1");?>">&nbsp;<a href="messages.php" title="Messages" style=text-decoration:none><font  color="white" size="2"><b><?php echo("$message"); ?></b></font></a></td>
<td width="20" background="/images/lblack.jpg"><font face="cracked johnnie" color="white" size="2">&nbsp; N</font></td>

<td align="center" width="60"><font face="cracked johnnie" color="white" size="2">&nbsp;</font></td>


<td ><input type="text" name="t1"   size="40">
<input type="submit" value="search"></td>
<td align="center" width="10"><font face="cracked johnnie" color="white" size="2">&nbsp;</font></td>


<td><a href="home.php" style=text-decoration:none><font color="white" face="Microsoft Sans Serif"><b>Home</b></font></a></td>
<td><a href="profile.php" style=text-decoration:none><font color="white" face="Microsoft Sans Serif"><b>Profile</b></font></a></td>
<td><a href="profileedit.php" style=text-decoration:none><font color="white" face="Microsoft Sans Serif"><b>Settings</b></font></a></td>
<td width="20">&nbsp;</td>
</td>
</tr>
</table>
</form>