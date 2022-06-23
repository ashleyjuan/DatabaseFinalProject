<?php
include "index.php";
// fetch records
$sql = "SELECT `customer`.`name` , `customer`.`phone_number` , `customer`.`email` , count(`payment`.`customer_id`) AS cnt
FROM `package` 
LEFT JOIN `payment` ON `package`.`package_id`=`payment`.`package_id` 
LEFT JOIN `time` ON `time`.`package_id`=`package`.`package_id` 
LEFT JOIN `shipment` ON `shipment`.`package_id`=`package`.`package_id` 
LEFT JOIN `customer` ON `payment`.`customer_id`=`customer`.`customer_id` 
WHERE `time`.`start_time` BETWEEN '20220101' AND '20221231'
GROUP BY `payment`.`customer_id`
ORDER BY cnt DESC";
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
