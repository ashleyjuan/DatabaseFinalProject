<?php
include "index.php";
// fetch records
$sql = "UPDATE `shipment` SET `statement` ='" . $_POST['statement'] . "'WHERE `package_id` = '" . $_POST['package_id'] . "';";
$result = mysqli_query($con, $sql);