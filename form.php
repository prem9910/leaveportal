<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();


//Grap variable

$fname = $_POST['fullname'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$dgnation = $_POST['dgnation'];
$leave_typ = $_POST['leave_typ'];
$reason = $_POST['reason'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];

$date1 = date_create($sdate);
$date2 = date_create($edate);

//difference between two dates
$diff = date_diff($date1,$date2);



//Create Our PDF
$data = '
<html>
<head><title>Leave Form</title></head>
<body>
<div>
<div style="height:120px;width:100px; float:left;">
<img src="./image/logo.png">
</div>
<br>
<div style=" width:70%; margin-left:80px;">
    <h1 style="text-align:center; font-size:25px">National Skill Training Institute</h1>
<p style="text-align:center; font-size:20px">Bengaluru</p>
</div>
</div>
<br>
<hr>
<br>
<p style="font-size:13px; font-weight:bold;"><u>APPLICATION FOR CAUSAL LEAVE/RESTRICTED HOLIDAY/COMPENSATORY OFF : <u></p><br><br>
<table>

<tr>
    <th style="text-align:left;vertical-align: top;">NAME OF APPLICANT : </th>
    <td>'.$fname.' </td>
</tr>
<br><br>
<tr>
    <th style="text-align:left;vertical-align: top;">DESIGNATION : </th>
    <td>'.$dgnation.' </td>
</tr>
<br><br>
<tr>
    <th style="text-align:left;vertical-align: top;">DATES : </th>
    <td>'.$sdate.' to '.$edate.' </td>
</tr>
<br><br>
<tr>
    <th style="text-align:left;vertical-align: top;">DURATION : </th>
    <td >'.$diff->format("%a").'</td>
</tr>
<br><br>
<tr>
    <th style="text-align:left;vertical-align: top; width:30%;">TYPE OF LEAVE : </th>
    <td>'.$leave_typ.' </td>
</tr>
<br><br>
<tr>
    <th style="text-align:left;vertical-align: top;">REASON : </th>
    <td>'.$reason.' </td>
</tr>
<br><br><br><br><br><br><br><br>
<tr>
    <th colspan="2" style="text-align:right;">SIGNATURE OF APPLICANT</th>
</tr>
<br>
<br><br><br>
<tr>
    <th style="text-align:left;" colspan="2">REMARKS OF CONTROLLING OFFICER</th>
</tr>
<br><br><br><br><br><br><br><br>
<tr>
    <th colspan="2" style="text-align:right; ">SANCTIONED/APPROVED: JOINT DIRECTOR/ Regional Director</th>
</tr>
</table>
</body>


</html>

';
$data .=" ";

// $stylesheet = file_get_contents('mpdf.css');


// Write PDF

$mpdf->WriteHTML($data);



// Output Data
$mpdf->Output();
?>
<!-- 
<p style="font-size:13px; font-weight:bold;"><u>APPLICATION FOR CAUSAL LEAVE/RESTRICTED HOLIDAY/COMPENSATORY OFF : <u></p><br>
<p style="font-size:13px; font-weight:bold;">NAME OF APPLICANT : </p>'.'<span style="float:right;padding-left:30px;
font-size:15px;  text-transform: capitalize;">'.$fname.'</span>'.'<br>
<p style="font-size:13px; font-weight:bold;">DESIGNATION :</p><br>
<p style="font-size:13px; font-weight:bold;">DURATION, DATES :</p><br>
<p style="font-size:13px; font-weight:bold;">TYPE OF LEAVE :</p><br>
<p style="font-size:13px; font-weight:bold;">REASON :</p><br><br><br>

</table>
<p style="font-size:13px; font-weight:bold; margin-left:400px;">SIGNATURE OF APPLICANT </p><br>
<p style="font-size:13px; font-weight:bold;">REMARKS OF CONTROLLING OFFICER </p><br><br>
<p style="font-size:13px; font-weight:bold; margin-left:400px;">SANCTIONED/APPROVED: JOINT DIRECTOR/ Regional Director</p> -->