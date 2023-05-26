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

    $query = "SELECT `orders`.`ID`, `book`.`NAME`, `employee`.`LASTNAME`, `customer`.`FIRSTNAME`, `customer`.`LASTNAME`, `orders`.`NUMBERS`, `orders`.`DATE_ORDER`, `orders`.`AMOUNT` 
    FROM `orders`
    JOIN `book` ON `orders`.`BOOK_ID` = `book`.`ID`
    JOIN `employee` ON `orders`.`EMPLOYEE_ID` = `employee`.`ID`
    JOIN `customer` ON `orders`.`CUSTOMER_ID` = `customer`.`ID` ORDER BY `orders`.`ID`";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $customers = $stmt->fetchAll();

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}

// Включаємо HTML шаблон
include 'get_data_orders.php';
?>