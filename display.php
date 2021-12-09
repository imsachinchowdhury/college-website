<?php
include("connection.php");
error_reporting(0);
?>
<html>
    <head>

    </head>
    <body>
        <table border="2" width="50%">
            <tr>
                <td>Roll</td>
                <td>Name</td>
                <td>Password</td>
                <td>Cpp</td>
                <td>Java</td>
                <td>Python</td>
                <td colspan="2">operator</td>
            </tr>

            <?php
                $query="SELECT * FROM addresult1";
                $data=mysqli_query($conn,$query);
                $total=mysqli_num_rows($data);
                if($total!=0)
                {
                    while($result=mysqli_fetch_array($data))
                    {
                    echo"
                    <tr>
                        <td>$result[0]</td>
                        <td>$result[1]</td>
                        <td>$result[2]</td>
                        <td>$result[3]</td>
                        <td>$result[4]</td>
                        <td>$result[5]</td>
                        <td>
                        <a href='edit.php?r=$result[0]&n=$result[1]&p=$result[2]&cpp=$result[3]&j=$result[4]&py=$result[5]' onclick='return edit()'>Edit</a>
                        </td>
                        <td>
                        <a href='delete.php?r=$result[0]' onclick='return delete()'>Delete</a>
                        </td>
                    </tr> 
                    ";
                    }
                }
            ?>
        </table>
        <script>
            function edit()
            {
                return confirm('Are you Wanna Update');
            }
            function delete()
            {
                return confirm('Are you Want to delete this data');
            }
            </script>
    </body>
</html>