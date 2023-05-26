<?php
$ID_emp = filter_var(trim($_POST['ID_emp']), FILTER_SANITIZE_STRING);
$firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
$lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
$position_emp = filter_var(trim($_POST['position_emp']), FILTER_SANITIZE_STRING);
$office = filter_var(trim($_POST['office']), FILTER_SANITIZE_STRING);
$rate_emp = filter_var(trim($_POST['rate_emp']), FILTER_SANITIZE_STRING);



$mysql = new mysqli('localhost','root','','website');
$currentDate = date('Y-m-d');
$mysql->query("INSERT INTO `employee`(`ID`,`FIRSTNAME`, `LASTNAME`, `POSITION`, `DATE_EMPLOYMENT`, `RATE`, `OFFICE_ID`) VALUES ('$ID_emp','$firstname', '$lastname', '$position_emp', '$currentDate', '$rate_emp','$office')");

$mysql->close();
header('Location:/admin_panel.html')
?>