<?php
session_start();
include "index.php";
$account = $_SESSION['account'];
// fetch records
$sql = "SELECT `package`.`package_id`,`package`.`package_type`,`payment`.`fee`,`package`.`destination`,`package`.`receiver_name`,`package`.`receiver_phone_number`,`time`.`start_time`,`time`.`schedule_time`,`time`.`end_time`,`shipment`.`statement`
FROM `package` 
LEFT JOIN `time` ON `time`.`package_id`=`package`.`package_id` 
LEFT JOIN `payment` ON `payment`.`package_id`=`package`.`package_id` 
LEFT JOIN `shipment` ON `shipment`.`package_id`=`package`.`package_id` 
LEFT JOIN `shipper` ON `shipper`.`shipper_id`=`package`.`shipper_id` 
LEFT JOIN `account` ON `account`.`account_id`=`shipper`.`account_id` 
WHERE  `account`.`account` = '" .$_SESSION['account'] . "'";

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