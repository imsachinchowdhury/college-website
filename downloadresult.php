<?php
include("connection.php");
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
$query="SELECT * FROM addresult1 WHERE roll='$user'";
$data=mysqli_query($conn,$query);
if(isset($_POST['submit']))
{
    include("fpdf/fpdf.php");
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",14);
    
    $pdf->Cell(0,20,$user.' '." Result",1,1,'C');
    $pdf->Cell(60,10,"C++ Programing",1,0,'C');
    $pdf->Cell(60,10,"C++ Programing",1,0,'C');
    $pdf->Cell(0,10,"C++ Programing",1,1,'C');
    while($result=mysqli_fetch_array($data))
    {
        $pdf->Cell(60,10, $result[3] ,1,0,'C');
        $pdf->Cell(60,10, $result[4] ,1,0,'C');
        $pdf->Cell(0,10, $result[5] ,1,1,'C');
    }



    $pdf->output();
}
?>