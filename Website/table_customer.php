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

    $query = "SELECT `ID`,`FIRSTNAME`,`LASTNAME`,`EMAIL`,`PASS_WORD`,`GENDER`,`DATE_BIRTH`,`CITY`,`PHONE_NUMBERS` FROM `customer`";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $customers = $stmt->fetchAll();

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}

// Включаємо HTML шаблон
include 'get_data.php';
?>
