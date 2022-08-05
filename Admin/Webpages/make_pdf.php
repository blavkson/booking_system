<?php 


    //Includes
    include '../Includes/db.inc.php';
    require_once __DIR__ . '/vendor/autoload.php';
    


//Grab date

$date = $_GET['dateChosen'];

//Grab appointment data from database

$statement = $con->prepare("SELECT * FROM appointment WHERE appoint_date = '$date'");
$statement->execute();

$data = $statement->fetchAll();

//Create new pdf instance

$mpdf =new \Mpdf\Mpdf();

//Insert data to pdf file

$report = " ";

$report .= "<h1>Scheduled appointments for '$date'</h1>";

//Write pdf
$mpdf->WriteHTML($report);

//Output pdf
$mpdf->Output("Report.pdf", "D");



