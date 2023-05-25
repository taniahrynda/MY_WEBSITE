<?php
$host = 'localhost';
$db   = 'website';
$user = 'root';
$pass = '';
$product_id = filter_var(trim($_POST['product_id']), FILTER_SANITIZE_STRING);
try {
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $product_id = filter_var(trim($_POST['product_id']), FILTER_SANITIZE_STRING);

    $query = "DELETE FROM `book` WHERE ID = :product_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->execute();

    echo "Товар успішно видалено";

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}
?>

