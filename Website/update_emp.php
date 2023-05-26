<?php
$host = 'localhost';
$db   = 'website';
$user = 'root';
$pass = '';

$product_id = filter_var(trim($_POST['product_id']), FILTER_SANITIZE_STRING);
$price_book = filter_var(trim($_POST['price_book']), FILTER_SANITIZE_STRING);

try {
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `employee` SET `RATE` = :price_book WHERE `ID` = :product_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':price_book', $price_book);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();

    echo "Зарплата працівника успішно оновлена";

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}
?>
