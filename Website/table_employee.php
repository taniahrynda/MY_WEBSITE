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

    $query = "SELECT `employee`.`ID`, `employee`.`FIRSTNAME`, `employee`.`LASTNAME`, `employee`.`POSITION`, `employee`.`DATE_EMPLOYMENT`, `employee`.`RATE`, `office`.`CITY`, `office`.`STREET` FROM `employee` JOIN `office` ON `employee`.`OFFICE_ID` = `office`.`ID` ORDER BY `employee`.`ID`";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $customers = $stmt->fetchAll();

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}

// Включаємо HTML шаблон
include 'get_data_employee.php';
?>