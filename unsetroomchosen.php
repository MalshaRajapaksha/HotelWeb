<?php
session_start();

unset($_SESSION['room_id']);
unset($_SESSION['roomname']);
unset($_SESSION['roomqty']);
unset($_SESSION['rate']);
unset($_SESSION['total_amount']);
header("location: index.php");
?>