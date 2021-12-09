<?php
include("connection.php");
error_reporting(0);
$roll=$_GET['r'];
$name=$_GET['n'];
$pwd=$_GET['p'];
$cpp=$_GET['cpp'];
$java=$_GET['j'];
$python=$_GET['py'];
?>
<html>
<head>
    <style>
        body{
            background-size:cover;
            background-position:center;
        }
    </style>
</head>
<body background="image.jpg">
    <center><font size="5"><b>Update Student Details</b></font></center>
    <br><br>
<form action="" method="GET">
    <center><font color="white"><label>Roll : </label></font></center>
    <br>
    <center><input type="text" value="<?php echo $roll ?>" name="roll" palceholder="Enter your Roll">
    <br><br>
    <center><font color="white"><label>Name : </label></font></center>
    <br>
    <center><input type="text" value="<?php echo $name ?>" name="name" palceholder="Enter your name">
    <br><br>
    <center><font color="white"><label>Password : </label></font></center>
    <br>
    <center><input type="text" value="<?php echo $pwd ?>" name="password" palceholder="Enter your password">
    <br><br>
    <center><font color="white"><label>Cpp : </label></font></center>
    <br>
    <center><input type="text" value="<?php echo $cpp ?>" name="cpp" palceholder="Enter your name">
    <br><br>
    <center><font color="white"><label>Java : </label></font></center>
    <br>
    <center><input type="text" value="<?php echo $java ?>" name="java" palceholder="Enter your name">
    <br><br>
    <center><font color="white"><label>python : </label></font></center>
    <br>
    <center><input type="text" value="<?php echo $python ?>" name="python" palceholder="Enter your name">
    <br><br>
    <center><input type="submit" name="submit" ></center>
</form>
</body>
</html>
<?php
if($_GET['submit'])
{
    $roll=$_GET['roll'];
    $name=$_GET['name'];
    $pwd=$_GET['password'];
    $cpp=$_GET['cpp'];
    $java=$_GET['java'];
    $python=$_GET['python'];
    $query="UPDATE addresult1 SET roll='$roll',name='$name',password='$pwd',cpp='$cpp',java='$java',python='$python' WHERE Roll=$roll";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL='http://localhost/adminpanel_project/display.php'">;
        <?php
    }
    else
    {
        echo "<script>alert('Not Updated')</script>";
    }
}
?>