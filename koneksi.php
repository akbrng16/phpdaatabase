<?php

$con = new mysqli('localhost', 'root', '', 'baitulquran');

$sql = "SELECT * FROM `barulagi`";

$result = $con-> query ($sql);


//data array
$array=array();
while($row = $result->fetch_assoc()) $array[]=$row; 



//mengubah data array menjadi json
echo json_encode($array);


?>