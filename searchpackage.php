<?php
include "index.php";
// fetch records
$sql = "SELECT `package`.`package_id`,`package`.`package_type`,`payment`.`fee`,`time`.`start_time`,`time`.`schedule_time`,`time`.`end_time`,`shipment`.`statement`
FROM `package` 
LEFT JOIN `time` ON `time`.`package_id`=`package`.`package_id` 
LEFT JOIN `payment` ON `payment`.`package_id`=`package`.`package_id` 
LEFT JOIN `shipment` ON `shipment`.`package_id`=`package`.`package_id` 
LEFT JOIN `customer` ON `customer`.`customer_id`=`payment`.`customer_id` 
WHERE  `customer`.`account_id` =`". $_SESSION['account_id']."`";
$result = mysqli_query($con, $sql);
// echo "<script>alert(‘提示內容’)</script>";
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