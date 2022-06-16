<?php
// db settings
$hostname = '140.127.74.186';
$username = '410977002';
$password = '410977002';
$database = '410977002';

// db connection
$con = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($con));

// fetch records
$sql = "SELECT `package_id`, `weight` ,`package_type`,`timeliness`,`fee`,`customer_id`,`receiver_id`,`warehouse_id`FROM `package`";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);
echo json_encode($dataset);
?>