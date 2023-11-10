<?php


require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = "<h1>Robotics Wokshop 2023</h1> <br><br> <img src='https://futureskillsprime.in//sites/default/files/2021-04/iStock-966248982_0.jpg' with='250px' height='100px'/>";

$mpdf->WriteHTML($html);
$mpdf->Output('output.pdf', \Mpdf\Output\Destination::FILE);
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="output.pdf"');
header('Content-Length: ' . filesize('output.pdf'));
readfile('output.pdf');