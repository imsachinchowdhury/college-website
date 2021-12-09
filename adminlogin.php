<?php
include("connection.php");
session_start();
?>
<html>
    <head>
        <style>
                #ipt{
                    width:400px;
                    height:20px;
                }
        </style>
    </head>
    <body>
        <center><p><font size="5"><b>Admin Login Page</b></font><p></center>
        <br>
        <form action="" method="POST">
            <center><label>Username : </label></center>
            <br>
            <center><input type="text" name="username" id="ipt"></center>
            <br><br>
            <center><label>Password : </label></center>
            <br>
            <center><input type="password" name="password" id="ipt"></center>
            <br><br>
            <center><input type="submit" value="submit" name="submit"></center>
        </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
    $username1=$_POST['username'];
    $pwd=$_POST['password'];
    $query="SELECT * FROM adminlogin1 WHERE username='$username1' && password='$pwd'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        echo $_SESSION['username1']=$username1;
        header('location:admin.php');
    }
    else
    {
        echo "Not found any data in data base";
    }

}

?>