<?php
include("connection.php");
session_start();
?>
<html>
<head>
    <style>
        input{
            width:500px;
            height:30px;
        }
        #btn{
            width:100px;
            height:30px;
        }
    </style>
</head>
<br><br><br>
<body>
    <form action="" method="POST">
        <table border="0" width="50%" align="center" cellspacing="10">
            <tr>
                <td>
                    <label>Roll : </label>
                    &nbsp &nbsp &nbsp &nbsp
                    <input type="text" name="roll">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password : </label>
                    
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" name="submit" value="submit" id="btn">
                    &nbsp &nbsp &nbsp 
                    <a href="forgetpassword.php">forgetpassword</a>
                </td>
                
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    
    $roll=$_POST['roll'];
    $pwd=$_POST['password'];
    
    $query="SELECT * FROM addresult1 WHERE Roll='$roll' && Password='$pwd'";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        echo $_SESSION['username']=$roll;

        header('location:seeresult.php');
       
    }
    else
    {
        echo "Not Successfull";
    }
}
?>