<?php
session_start();
error_reporting(0);
$user=$_SESSION['username'];
if($user == true)
{
    
}
else
{
    header('location:login.php');
}
?>
<html>
<head>

<style>
    .btn{
        width:100px;
        height:30px;
        background:black;
        border:1px solid black;
        
    }
    .btn a{
        color:white;
        text-decoration:none;
    }
</style>

</head>

<body>
    <br><br>
    <h1 align="center"><?php echo "Wellcome to".' '.$_SESSION['username']?></h1>
    <br><br><br>
    <table border="2" cellspacing="10" align="center">
        <tr>
            <td>Subject</td>
            <td>C++</td>
            <td>Java</td>
            <td>Python</td>
        </tr>

    <?php
        include("connection.php");
        if($user>=1 && $user<=100)
        {
                $query="SELECT * FROM addresult1 WHERE Roll=$user";
                $data=mysqli_query($conn,$query);
                $total=mysqli_num_rows($data);
                if($total==1)
                {
                    while($result=mysqli_fetch_assoc($data))
                    {
                        echo "
                        <tr>
                            <td>CGPA : </td>
                            <td>".$result['Cpp']."</td>
                            <td>".$result['Java']."</td>
                            <td>".$result['Python']."</td>
                        </tr>
                    ";
                    }

                }
        }
        else{

            echo "Not Found";
        }
    ?>
</table>
<br>
<form action="downloadresult.php" method="POST">
   <center> <input type="submit" name="submit" value="PDF"></center>

</form>
<br>
<center><div class="btn">
    <a href="logout.php">Logout</a>

</div></center>
</body>

</html>
