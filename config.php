<?php
session_start();
ob_start();
$conn = mysqli_connect('localhost','root','');
if($conn == true){
    mysqli_select_db($conn, 'excellence_tech');
}else{
    echo "DB Connection Error";
}
?>