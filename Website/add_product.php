<?php
$name_book = filter_var(trim($_POST['name_book']), FILTER_SANITIZE_STRING);
$category_id = filter_var(trim($_POST['category_id']), FILTER_SANITIZE_STRING);
$author_id = filter_var(trim($_POST['author_id']), FILTER_SANITIZE_STRING);
$publication_id = filter_var(trim($_POST['publication_id']), FILTER_SANITIZE_STRING);
$year_pub = filter_var(trim($_POST['year_pub']), FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
$price_book = filter_var(trim($_POST['price_book']), FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','','website');
$mysql->query("INSERT INTO `book`(`NAME`,`CATEGORY_ID`,`AUTHOR_ID`,`PUBLICATION_ID`,`YEAR_PUBLICATION`,`DESCRIPTION_BOOK`,`PRICE`) VALUES ('$name_book', '$category_id', '$author_id', '$publication_id', '$year_pub','$description','$price_book')");

$mysql->close();
header('Location:/admin_panel.html')
?>
