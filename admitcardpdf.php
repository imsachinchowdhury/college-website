<?php
include("connection.php");
error_reporting(0);
session_start();
$user3=$_SESSION['username2'];
if($user3 == true)
{
    
}
else
{
    header('location:admitcardlogin.php');
}
$query="SELECT * FROM admitcard";
$data=mysqli_query($conn,$query);
if(isset($_POST['submit']))
{
    include("fpdf/fpdf.php");
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",16);
    $pdf->Cell(0,10,"XYZ UNIVERSITY OF TECHNOLOGY, WEST BENGAL",1,1,'C');
    $pdf->Cell(0,10,"Roll No is ".' '.$user3,1,1,'C');
    $pdf->Cell(40,10,"Date",1,0,'C');
    $pdf->Cell(50,10,"Time",1,0,'C');
    $pdf->Cell(0,10,"Subject",1,1,'C');
    while($result=mysqli_fetch_array($data))
    {
        $pdf->Cell(40,10,$result[0],1,0,'C');
        $pdf->Cell(50,10,$result[1],1,0,'C');
        $pdf->Cell(0,10,$result[2],1,1,'C');
    }
    $pdf->output();

}

?>