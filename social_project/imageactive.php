<?php
session_start();
$assign="image.php";
$_SESSION['assign']=$assign;

$color="red";
$_SESSION['color']=$color;


?>
<script language="javascript">
window.location.replace('home.php');
</script>