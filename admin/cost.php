<?php
include "index.php";
// fetch records
$sql = "SELECT `customer`.`name` , `customer`.`phone_number` , `customer`.`email` , SUM(`payment`.`fee`) AS cost
FROM `package` 
LEFT JOIN `payment` ON `package`.`package_id`=`payment`.`package_id`  
LEFT JOIN `customer` ON `payment`.`customer_id`=`customer`.`customer_id` 
GROUP BY `payment`.`customer_id`
ORDER BY cost DESC";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

$dataset = array(
    "echo" => 1,
    "totalrecords" => count($array),
    "totaldisplayrecords" => count($array),
    "data" => $array
);
echo json_encode($dataset);