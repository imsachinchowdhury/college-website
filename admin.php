<?php
include("connection.php");
error_reporting(0);
session_start();
$user1=$_SESSION['username1'];
if($user1 == true)
{

}
else
{
    header('location:adminlogin.php');
}
?>

<html>
<head>

</head>

<body>
<div class="container" align="center">
<a href="#" ><font size="5" color="black"><b>XYZ Institution and Techonology</b></font></a>
<br><br>
<table border="1" width="100%" >
    <tr>
        <td align="center" width="100%" height="100px" bgcolor="blue"><font size="5"><b>Welcom to our protal</b></font><td>
    </tr>
</table>
<br><br>
<table width="100%" border="1" height="200px" cellspacing="20px">
<tr align="center">
    <td width="33%" bgcolor="red"><a href="addresult.php"><font color="white" size="5"><b>Add Result<b></font></a></td>
    <td width="33%" bgcolor="red"><a href="addadmitcard.php"><font color="white" size="5"><b>ADD Admit Card<b></font></a></td>
    <td width="34%" bgcolor="red"><a href="addnotice.php"><font color="white" size="5"><b>Add New Notice<b></font></a></td>  
</tr>
<tr>
    <td width="33%" bgcolor="purple" align="center"><a href="display.php"><font color="white" size="5"><b>Display</b></font></a></td>
    <td width="33%" bgcolor="black" align="center"><a href="adminlogout.php"><font color="white" size="5"><b>Logout</b></font></a></td>
</tr>
</table>
</div>
</body>
</html>