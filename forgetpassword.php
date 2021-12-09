<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head>
    <style>
        #s1{
            width:400px;
            height:30px;
        }
    </style>
</head>
<body>
<form action="" method="GET">
    <center><label>Roll : </label></center>
    <br>
    <center><input type="text" name="roll" id="s1"></center>
    <br><br>
    <center><label>Password : </label></center>
    <br>
    <center><input type="password" name="password" id="s1"></center>
    <br><br>
    <center><input type="submit" name="submit" value="submit"> </center>
    <br><br>
    

</form>
</body>
</html>
<?php
if(isset($_GET['submit']))
{
    $roll=$_GET['roll'];
    $pwd=$_GET['password'];
    $query="UPDATE addresult1 SET password='$pwd' WHERE ROLL=$roll";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "<script>alert('Record Updated')</script>";
    }
    else
    {
        echo "Notsuccessful";
    }
}

?>
