<?php

// db settings
$hostname = '140.127.74.186';
$username = '410977002';
$password = '410977002';
$database = '410977002';

// db connection
$con = mysqli_connect($hostname, $username, $password, $database) or die("Error " . mysqli_error($con));
