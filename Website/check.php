<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
$dateOfBirth = filter_var(trim($_POST['dateOfBirth']), FILTER_SANITIZE_STRING);
$city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
$phoneNumber = filter_var(trim($_POST['phoneNumber']), FILTER_SANITIZE_STRING);
if(mb_strlen($password)<5){
  echo "Довжина логіна не доступна";
  exit();
}

$mysql = new mysqli('localhost','root','','website');
$mysql->query("INSERT INTO `customer`(`FIRSTNAME`,`LASTNAME`,`EMAIL`,`PASS_WORD`,`GENDER`,`DATE_BIRTH`,`CITY`,`PHONE_NUMBERS`) VALUES ('$name', '$surname', '$email', '$password', '$gender','$dateOfBirth','$city','$phoneNumber')");
$mysql->close();
header('Location:/book.html')
?>

