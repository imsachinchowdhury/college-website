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
                    <input type="text" name="roll2">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password : </label>
                    
                    <input type="password" name="password2">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" name="submit2" value="submit" id="btn">
                    &nbsp &nbsp &nbsp 
                    <a href="forgetpassword.php">forgetpassword</a>
                </td>
                
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit2']))
{
    
    $roll2=$_POST['roll2'];
    $pwd2=$_POST['password2'];
    
    $query2="SELECT * FROM addresult1 WHERE Roll='$roll2' && Password='$pwd2'";
    $data2=mysqli_query($conn,$query2);
    $total2=mysqli_num_rows($data2);
    if($total2==1)
    {
         $_SESSION['username2']=$roll2;

        header('location:admitcard.php');
       
    }
    else
    {
        echo "Not Successfull";
    }
}
?>