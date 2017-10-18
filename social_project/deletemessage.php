<?php

	mysql_connect("localhost", "root", "")or die("cannot connect");
                        mysql_select_db("users")or die("connection lost..!!!");

$id=$_GET['id'];

if($id)
{
$sql="DELETE FROM messages WHERE id='$id'";
$res=mysql_query($sql);

if($res)
{
?>
<script language="javascript">
window.location.replace('messages.php');
</script>
<?php
}
}
else
{
?>
<script language="javascript">
window.location.replace('messages.php');
</script>
<?php
}



?>