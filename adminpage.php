<?php
include("connection.php");

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
        <center><p><font size="5"><b>Admin Edit Login Page</b></font><p></center>
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
     $username=$_POST['username'];
     $pwd=$_POST['password'];
     $query="INSERT INTO adminlogin1 VALUES ('$username','$pwd')";
     $data=mysqli_query($conn,$query);
     if($data)
     {
        //echo "Insert";
     }
     else
     {
         echo "Not Insert";

     }
 }

?>