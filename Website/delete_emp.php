<?php
$host = 'localhost';
$db   = 'website';
$user = 'root';
$pass = '';
$emp_id = filter_var(trim($_POST['emp_id']), FILTER_SANITIZE_STRING);
try {
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $query = "DELETE FROM `employee` WHERE ID = :emp_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':emp_id', $emp_id);
    $stmt->execute();

    echo "Працівника успішно видалено";

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}
?>

