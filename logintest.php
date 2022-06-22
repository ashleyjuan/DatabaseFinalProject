<?php
include "index.php";
if (!(empty($_POST['account']) || empty($_POST['password']))) {
    include('connectMySQL.php');

    $account = $_POST['account'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `account` WHERE password='";
    $sql .= $password . "' AND account='" . $account . "'";

    $result = mysqli_query($con, $sql);
    // $data = mysqli_query($db_link, $sql);
    $user = mysqli_fetch_assoc($result);

    session_start();
    $_SESSION['id'] = $user['id'];
    header('Location: home.html');

    if(! isset($_SESSION['id'])) {
        // echo "<script> {window.alert('使用者名稱或密碼錯誤！');location.href='login.html'} </script>";
        header('Location: login.html');
    }
}
