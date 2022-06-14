<?php  
$username="410977002";  
$password="410977002";  
$hostname = "140.127.74.186";  
//connection string with database  
$dbhandle = mysqli_connect($hostname, $username, $password)  
or die("Unable to connect to phpmyadmin");  
echo "Connect successful";  
// connect with database  
$selected = mysqli_select_db($dbhandle, "410977002")  
or die("Could not select database");  
//query fire  
$result = mysqli_query($dbhandle,"select * from account;");  
$json_response = array();  
// fetch data in array format  
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
// Fetch data of Fname Column and store in array of row_array
$row_array['account'] = $row['account'];  
$row_array['password'] = $row['password']; 


//push the values in the array  
array_push($json_response,$row_array);  
}  
//  
echo json_encode($json_response); 
mysqli_free_result($result);
?>