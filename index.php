<?php
// 建立MySQL的資料庫連接 
$link = mysqli_connect("140.127.74.186","410977002",
                       "410977002","410977002")
        or die("無法開啟MySQL資料庫連接!<br/>");
echo "資料庫test開啟成功!<br/>";
//$sql = "INSERT INTO `test`(`name`, `tel`, `birthday`, `address`, `id`) VALUES (\"1234\",\"1234\",\"2016-12-22\",\"123\",\"003\")"; // 指定SQL字串
echo "SQL字串: $sql <br/>";
//送出UTF8編碼的MySQL指令
// mysqli_query($link, 'SET NAMES utf8'); 
$result=mysqli_query($link, $sql);
?>
