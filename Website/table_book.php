<?php
$host = 'localhost';
$db   = 'website';
$user = 'root';
$pass = '';

try {
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = "SELECT `book`.`ID`, `book`.`NAME`, `category`.`TYPE_OF_BOOK`, `category`.`LANGUAGE_BOOK`, `category`.`FORMAT_BOOK`, `author`.`FIRSTNAME`, `author`.`LASTNAME`, `publication`.`NAME` AS `PUBLICATION_NAME`, `book`.`YEAR_PUBLICATION`, `book`.`DESCRIPTION_BOOK`, `book`.`PRICE` 
    FROM `book`
    JOIN `category` ON `book`.`CATEGORY_ID` = `category`.`ID`
    JOIN `author` ON `book`.`AUTHOR_ID` = `author`.`ID`
    JOIN `publication` ON `book`.`PUBLICATION_ID` = `publication`.`ID` ORDER BY `book`.`ID`";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $customers = $stmt->fetchAll();

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}

// Включаємо HTML шаблон
include 'get_data_book.php';
?>