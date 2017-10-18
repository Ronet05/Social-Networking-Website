<?php
include 'login.php'; 
include 'bar.php';

if(($_SESSION['$harminder'])=='harminder')
{
$page="harminder.php";
}
elseif(($_SESSION['$prashant'])=='prashant')
{
$page="prashant.php";
}
elseif(($_SESSION['$tarun'])=='tarun')
{
$page="tarun.php";
}
elseif(($_SESSION['$vikrant'])=='vikrant')
{
$page="vikrant.php";
}

else
{
$page="harminder.php";
}

?>
<html>
<head>
<link rel="icon" href="/images/ico.jpg" type="image/x-icon" />

<title>Our trainers</title></head>

<br><table width="300" align="left">
<tr>
<td align="center"><font color="white" size="5">&nbsp;</td></font>
</tr>
<tr>
<td align="center"><font color="white" size="5">Our Trainers</td></font>
</tr>
<tr>
<td align="center">
<a href="harmin1.php"><font color="white" size="3">Harminder Singh</font></a>
</td>
</tr>
<tr>
<td align="center">
<a href="prashant1.php"><font color="white" size="3">Prashant Bareja</font></a>
</td>
</tr>
<tr>
<td align="center">
<a href="tarun1.php"><font color="white" size="3">Tarun Sharma</font></a>
</td>
</tr>
<tr>
<td align="center">
<a href="vikrant1.php"><font color="white" size="3">Vikrant Sharma</font></a>
</td>
</tr>
</table>

<table width="900" align="left">
<tr>
<td><?php include"$page"; ?></td>
</tr>
</table>

