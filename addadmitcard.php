<?php
include("connection.php");
error_reporting(0);
?>
<html>
<head></head>
<body>
<center><p><font size="6"><b>Add Admit Card</b></font></p></center>
<br><br>
<form action="" method="POST">
    <center><label>Date</label></center>
    <br>
    <center><input type="text" name="date"></center>
    <br><br>
    <center><label>Time</label></center>
    <br>
    <center><input type="text" name="time"></center>
    <br><br>
    <center><label>Subject</label></center>
    <br>
    <center><input type="text" name="subject"></center>
    <br><br>
    <center><input type="submit" name="submit"></center>

</form>
<?php
if(isset($_POST['submit']))
{
    $date=$_POST['date'];
    $time=$_POST['time'];
    $sub=$_POST['subject'];
    $query="INSERT INTO admitcard VALUES ('$date','$time','$sub')";
    $data=mysqli_query($conn,$query);
    if($data)
    {

    }
    else
    {
        echo "Not Insert";
    }
}
?>
</body>
</html>