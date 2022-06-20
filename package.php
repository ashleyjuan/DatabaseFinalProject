<?php
include "index.php";
// fetch records
$sql = "SELECT `package`.`package_id`,`package`.`package_type`,`payment`.`fee`,`package`.`start_location`,`package`.`destination`,
`customer`.`name`, `time`.`start_time`,`time`.`schedule_time`,`time`.`end_time`,`package`.`receiver_name`,`package`.`receiver_phone_number`,
`transportation`.`type_name`,`shipment`.`statement` 
FROM `package` 
LEFT JOIN `payment` ON `package`.`package_id`=`payment`.`package_id` 
LEFT JOIN `time` ON `time`.`package_id`=`package`.`package_id` 
LEFT JOIN `shipment` ON `shipment`.`package_id`=`package`.`package_id` 
LEFT JOIN `customer` ON `payment`.`customer_id`=`customer`.`customer_id` 
LEFT JOIN `transportation` ON `transportation`.`transportation_id`=`package`.`transportation_id`";
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
