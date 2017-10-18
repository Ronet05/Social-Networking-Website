<?php

$month=strftime('%m');

if($month=='01')
{
$currentmonth="January";
}
elseif($month=='02')
{
$currentmonth="February";
}
elseif($month=='03')
{
$currentmonth="March";
}
elseif($month=='04')
{
$currentmonth="April";
}
elseif($month=='05')
{
$currentmonth="May";
}
elseif($month=='06')
{
$currentmonth="June";
}
elseif($month=='07')
{
$currentmonth="July";
}
elseif($month=='08')
{
$currentmonth="August";
}
elseif($month=='09')
{
$currentmonth="September";
}
elseif($month=='10')
{
$currentmonth="October";
}
elseif($month=='11')
{
$currentmonth="November";
}
elseif($month=='12')
{
$currentmonth="December";
}

$sql1112="SELECT email1 as friend1 FROM friend1 WHERE email2='{$_SESSION['$email']}'";
$res1112=mysql_query($sql1112);

echo'<table width="200" bgcolor="white"><tr><td background="/images/grey.jpg" align="center"><b>Upcoming Birthdays</b></td></tr>';
while ($c=mysql_fetch_array($res1112,MYSQL_ASSOC))
{

$bfriend1=$c['friend1'];

$sql1113="SELECT day FROM members WHERE email='$bfriend1'";
$res1113=mysql_query($sql1113);
$bdate=mysql_result($res1113,$row);

$sql1114="SELECT month FROM members WHERE email='$bfriend1'";
$res1114=mysql_query($sql1114);
$bmonth=mysql_result($res1114,$row);

$sql1115="SELECT year FROM members WHERE email='$bfriend1'";
$res1115=mysql_query($sql1115);
$byear=mysql_result($res1115,$row);

$sql1116="SELECT folder FROM members WHERE email='$bfriend1'";
$res1116=mysql_query($sql1116);
$bfolder=mysql_result($res1116,$row);

$sql1117="SELECT image FROM members WHERE email='$bfriend1'";
$res1117=mysql_query($sql1117);
$bimage=mysql_result($res1117,$row);

$sql1118="SELECT first FROM members WHERE email='$bfriend1'";
$res1118=mysql_query($sql1118);
$bname=mysql_result($res1118,$row);

$bname=ucfirst("$bname");

$sql1119="SELECT last FROM members WHERE email='$bfriend1'";
$res1119=mysql_query($sql1119);
$blast=mysql_result($res1119,$row);

$blast=ucfirst("$blast");

$sql1110="SELECT id FROM members WHERE email='$bfriend1'";
$res1110=mysql_query($sql1110);
$bid=mysql_result($res1110,$row);

$currentdate=strftime('%d');


if(($currentmonth==$bmonth) &&($currentdate<$bdate))
{


echo'<tr><td><table bgcolor="white" width="150"><tr><td width="50"><a href="searchfile.php?id='.$bid.'"><img src="'.$bfolder.''.$bimage.'" width="40" height="40"></a></td><td width="100" align="left"><font size="2"><b>'.$bname.' '.$blast.'</font></b><br><font size="2">'.$bdate.''.$bmonth.''.$byear.'</font></td></tr></table></td></tr>
';

}
}


$sql1112="SELECT email2 as friend1 FROM friend1 WHERE email1='{$_SESSION['$email']}'";
$res1112=mysql_query($sql1112);


while ($c=mysql_fetch_array($res1112,MYSQL_ASSOC))
{

$bfriend1=$c['friend1'];

$sql1113="SELECT day FROM members WHERE email='$bfriend1'";
$res1113=mysql_query($sql1113);
$bdate=mysql_result($res1113,$row);

$sql1114="SELECT month FROM members WHERE email='$bfriend1'";
$res1114=mysql_query($sql1114);
$bmonth=mysql_result($res1114,$row);

$sql1115="SELECT year FROM members WHERE email='$bfriend1'";
$res1115=mysql_query($sql1115);
$byear=mysql_result($res1115,$row);

$sql1116="SELECT folder FROM members WHERE email='$bfriend1'";
$res1116=mysql_query($sql1116);
$bfolder=mysql_result($res1116,$row);

$sql1117="SELECT image FROM members WHERE email='$bfriend1'";
$res1117=mysql_query($sql1117);
$bimage=mysql_result($res1117,$row);

$sql1118="SELECT first FROM members WHERE email='$bfriend1'";
$res1118=mysql_query($sql1118);
$bname=mysql_result($res1118,$row);

$bname=ucfirst("$bname");

$sql1119="SELECT last FROM members WHERE email='$bfriend1'";
$res1119=mysql_query($sql1119);
$blast=mysql_result($res1119,$row);

$blast=ucfirst("$blast");

$sql1110="SELECT id FROM members WHERE email='$bfriend1'";
$res1110=mysql_query($sql1110);
$bid=mysql_result($res1110,$row);

$currentdate=strftime('%d');


if(($currentmonth==$bmonth) &&($currentdate<$bdate))
{


echo'<tr><td><table bgcolor="white" width="150"><tr><td width="50"><a href="searchfile.php?id='.$bid.'"><img src="'.$bfolder.''.$bimage.'" width="40" height="40"></a></td><td width="100" align="left"><font size="2"><b>'.$bname.' '.$blast.'</font></b><br><font size="2">'.$bdate.''.$bmonth.''.$byear.'</font></td></tr></table>
';

}
}
echo'</td></tr></table>';
?>



