
<?php
include("connection.php");
error_reporting(0);
?>
<html>
    <head>
        <style>
            .image{
            background:url('image.jpg');
                background-size:cover;
                background-position:center;
            }
        </style>
    </head>
    <body class="image" align="center">
        <form action="" method="POST">
          <label><font size="5" color="white">University Roll : </font></label>
           <br><br>
           <input type="text" name="roll" placeholder="Enter Your Roll Number">
           <br><br>
           <label><font size="5" color="white">Name : </font></label>
           <br><br>
           <input type="text" name="name" placeholder="Enter Your name">
           <br><br>
           <label><font size="5" color="white">Password : </font></label>
           <br><br>
           <input type="password" name="password" placeholder="Enter Your password">
           <br><br>
           <label><font size="5" color="white"> C++ : </font></label>
           <br><br>
           <input type="text" name="cpp">
           <br><br>
           <label><font size="5" color="white">Java : </font></label>
           <br><br>
           <input type="text" name="java">
           <br><br>
           <label><font size="5" color="white">Python : </font></label>
           <br><br>
           <input type="text" name="python">
           <br><br>
           <input type="submit" name="submit" value="submit">
        </form>

    </body>

</html>
<?php
if(isset($_POST['submit']))
{
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    $pwd=$_POST['password'];
    $sub1=$_POST['cpp'];
    $sub2=$_POST['java'];
    $sub3=$_POST['python'];
    $query="INSERT INTO addresult1 VALUES ('$roll','$name','$pwd','$sub1','$sub2','$sub3')";
    $data=mysqli_query($conn,$query);
    if($data)
    {
        echo "Insert into Database";
    }
    else
    {
        echo "Not Insert";
    }
}

?>