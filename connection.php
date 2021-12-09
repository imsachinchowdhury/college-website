<?php
$servername="localhost";
$username="root";
$password="";
$databasename="adminpanelproject";
$conn=mysqli_connect($servername,$username,$password,$databasename);
if($conn)
{
    //echo "Successfull";
}
else
{
    echo "Faield"; 
}

?>