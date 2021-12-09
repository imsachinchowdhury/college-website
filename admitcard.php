<?php
include("connection.php");
error_reporting(0);
session_start();
$user3=$_SESSION['username2'];
if($user3 == true)
{
    
}
else
{
    header('location:admitcardlogin.php');
}
?>
<html>
<head>
<title>Admit Card</title>
<style>
    #pdf{
        text-decoration:none;
        border:1px solid black;
        border-radius:5px;
        background:blue;
        color:white;
    }
</style>
</head>
<br><br><br>
<body>
<table align="center" border="2">
<tr>
<td>Date</td>
<td>Time</td>
<td>Subject</td>
</tr>


<?php

if($user3>=1 && $user3<=100)
{
$query="SELECT * FROM admitcard";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


    if($total!=0)
    {
    while($result=mysqli_fetch_array($data))
    {
        echo "
            <tr>
                <td>$result[0]</td>
                <td>$result[1]</td>
                <td>$result[2]</td>
            <tr>
        ";
    }
}
}
?>

</table>
<br>
<form action="admitcardpdf.php" method="POST">
    <center><input type="submit" name="submit" value="PDF"></center>
</form>
</body>
</html>