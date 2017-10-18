<html>

<head>


</head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>

<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />


<table align="right" align="top" bgcolor="white" width="150">
<tr>
<td align="center" background="./images/black.jpg">
<b><font color="white">Online Friends</font></b>
</td>
</tr>
<?php
$_SESSION['$username']=$username;


$sql141="SELECT id from members WHERE email='{$_SESSION['$email']}'";
$res141=mysql_query($sql141);
$merid=mysql_result($res141, $row);

$sql142="SELECT email2 as friend1 FROM friend1 WHERE email1='{$_SESSION['$email']}'";
$res142=mysql_query($sql142);

while ($x=mysql_fetch_array($res142,MYSQL_ASSOC))
{

$fndemail=$x['friend1'];

$sql143="SELECT id FROM members WHERE email='$fndemail'";
$res143=mysql_query($sql143);
$fndid=mysql_result($res143,$row);

$sql145="SELECT first FROM members WHERE email='$fndemail'";
$res145=mysql_query($sql145);
$fndname=mysql_result($res145,$row);

$fndname=ucfirst("$fndname");


$sql144="SELECT online FROM profile WHERE id='$fndid'";
$res144=mysql_query($sql144);
$fndonline=mysql_result($res144,$row);

$sol143="SELECT folder FROM members WHERE id='$fndid'";
$ros143=mysql_query($sol143);
$fndfolder=mysql_result($ros143,$row);

$sol144="SELECT image FROM members WHERE id='$fndid'";
$ros144=mysql_query($sol144);
$fndimage=mysql_result($ros144,$row);


if($fndonline=="1")
{

$fndnaame="'$fndname'";


echo'<tr><td><table width="100%"><tr><td width="30"><img src="'.$fndfolder.''.$fndimage.'" height="30" width="30"></td><td width="100"><div id="main_container"><a href="javascript:void(0)" style=text-decoration:none
onclick="javascript:chatWith('.$fndnaame.') "><font color="black">'.$fndname.'</font></a></td><td width="20"><img src="./images/online.png"></td></tr></table><img src="/images/grey.jpg" height="1" width="150"></td></tr>';


}
}
 

$sql146="SELECT email1 as friend1 FROM friend1 WHERE email2='{$_SESSION['$email']}'";
$res146=mysql_query($sql146);

while ($y=mysql_fetch_array($res146,MYSQL_ASSOC))
{

$fnddemail=$y['friend1'];

$sql147="SELECT id FROM members WHERE email='$fnddemail'";
$res147=mysql_query($sql147);
$fnddid=mysql_result($res147,$row);

$sql148="SELECT first FROM members WHERE email='$fnddemail'";
$res148=mysql_query($sql148);
$fnddname=mysql_result($res148,$row);

$fnddname=ucfirst("$fnddname");


$sql149="SELECT online FROM profile WHERE id='$fnddid'";
$res149=mysql_query($sql149);
$fnddonline=mysql_result($res149,$row);

$sol146="SELECT folder FROM members WHERE id='$fnddid'";
$ros146=mysql_query($sol146);
$fnddfolder=mysql_result($ros146,$row);

$sol147="SELECT image FROM members WHERE id='$fnddid'";
$ros147=mysql_query($sol147);
$fnddimage=mysql_result($ros147,$row);

$fnddnaame="'$fnddname'";


if($fnddonline=="1")
{

echo'<tr><td><table width="100%"><tr><td width="30"><img src="'.$fnddfolder.''.$fnddimage.'" height="30" width="30"></td><td width="100"><div id="main_container"><a href="javascript:void(0)"  style=text-decoration:none
onclick="javascript:chatWith('.$fnddnaame.') "><font color="black">

'.$fnddname.'</font></a></td><td width="20"><img src="./images/online.png"></td></tr></table><img src="/images/grey.jpg" height="1" width="150"></td></tr>';


}
}


?>




</html>