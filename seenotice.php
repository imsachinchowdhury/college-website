<?php
include("connection.php");
error_reporting(0);
?>
<html>

<head></head>
<body>
    <table border="2">
        <tr>
            <td>Notice Box</td>
        </tr>
    <?php
        $query="SELECT * FROM notice";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
        if($total>0)
        {
            while($result=mysqli_fetch_array($data))
            {
                echo "
                <tr>
                    <td><a href='$result[1]'>$result[0]</a></td>
                </tr>
                ";
            }
        }
    ?>
    </table>
</body>
</html>