<?php
include("connection.php");
error_reporting(0);
$roll=$_GET['r'];
$query="DELETE FROM addresult1 WHERE Roll=$roll";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>Data Delete Into Database</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/adminpanel_project/display.php">
    <?php
}
else
{
    echo "Not Delete";
}
?>