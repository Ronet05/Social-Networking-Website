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
mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");
?>
<head>
<link rel="icon" href="/images/ico.jpg" type="image/x-icon" />
<title>Search your buddies</title></head>
<body bgcolor="#edf0f5">
<?php
include'head.php';

?>






<br><br><table width="723" cellpadding="3" cellspacing="3" background="./images/white.jpg" align="center">
<tr>
<td><font color="black" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Results<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="./images/black.jpg" height="2" width="500">
</font></td>
</tr>

<tr><td>
<?PHP

$string=$_POST['t1'];

$k="0";

$sql="SELECT id as id, first as us,last as last,email as email, image as image,sex as sex,city as city,folder as folder FROM members WHERE first like '$string%' or email like '$string%'";
$result=mysql_query($sql);
$p=mysql_num_rows($result);


if($p>0)
{
	while ($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		$_SESSION['user']=$row;
	
	echo'<center><table width="500" height="140"><tr><td><table width="220" height="120" cellpadding="5" cellspacing="5">
	<tr><a href="profile.php"><td height="100" width="100" colspan="1"><a href="searchfile.php?id='.$_SESSION['user']['id'].'"><img src="'.$_SESSION['user']['folder'].''.$_SESSION['user']['image'].'" height="80" width="80"></a></td></a><td align="left" 
	width="120">&nbsp;<font  color="black"><b>'.ucfirst($_SESSION['user']['us']).'&nbsp;'.ucfirst($_SESSION['user']['last']).'</b><br><br>&nbsp;'.$_SESSION['user']['sex'].'<br>'.$_SESSION['user']['city'].'</font></td></tr><tr height="10"><td height="10" colspan="2">&nbsp;<font color="black">'.$_SESSION['user']['email'].'</font></td></tr>
	<tr>&nbsp;</tr>';
	echo'</table></td></tr>';
	echo'</table></center>';
	}
}
else 
{
	echo '<center><font color="white">Not found</font></center>';
	
}
?>
</td>
</tr>
</table>

</body>



</html>
<?php 
}
?>