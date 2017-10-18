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


$file_upload="true";
if($_FILES['file_up']['size']=="")
{

$hurr="Oops!! you forgot to select the image";
$_SESSION['$hurr']=$hurr;
?>
<script language="javascript">
window.location.replace("changepic.php");
</script>

<?php
}


else
{
$file_up_size=$_FILES['file_up']['size'];
echo $_FILES['file_up']['name'];
if ($_FILES['file_up']['size']>250000){$msg=$msg."Your uploaded file size is more than 250KB so please reduce the file size and then upload. Visit the help page to know how to reduce the file size.<BR>";
$file_upload="false";}


$file_name=$_FILES['file_up']['name'];
$add="profiles/$file_name"; // the path with the file name where the file will be stored, upload is the directory name.
if($file_upload=="true"){

if(move_uploaded_file ($_FILES['file_up']['tmp_name'], $add))
{


mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");

$folder="./profiles/";

$sql="UPDATE members SET folder='$folder',image='$file_name' WHERE email='{$_SESSION['$email']}'";
$res=mysql_query($sql);

if($res)
{
?>
<script language="javascript">
window.location.replace('changepic.php');
</script>


<?php
}
else
{echo("no");}


}
else{echo "Failed to upload file Contact Site admin to fix the problem";}

}else{echo $msg;}
}
}
?> 