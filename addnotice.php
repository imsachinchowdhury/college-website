<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head></head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<center><label>Title</label></center>
<br>
<center><input type="text" name="title"></center>
<br><br>
<center><label>Image</label></center>
<br>
<center><input type="file" name="username" ></center>
<br><br>
<center><input type="submit" name="submit" ></center>
</form>
 <?php
 if(isset($_POST['submit']))
 {

$title=$_POST['title'];
$filename=$_FILES['username']['name'];
$tempname=$_FILES['username']['tmp_name'];
$folder="image/".$filename;
move_uploaded_file($tempname,$folder);
$query="INSERT INTO notice VALUES ('$title','$folder')";
$data=mysqli_query($conn,$query);
if($data)
{

}
else
{
    echo "Not Inserted";
}
 }
 ?>
</body>
</html>