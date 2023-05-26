<?php
$host = 'localhost'; // хост бази даних
$db   = 'website'; // назва бази даних
$user = 'root'; // користувач бази даних
$pass = 'root'; // пароль бази даних

try {
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);

    // Налаштування додаткових параметрів PDO, якщо необхідно
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Ваш код для роботи з базою даних

} catch (PDOException $e) {
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}
$stmt = $pdo->query('SELECT * FROM CUSTOMER');

while ($row = $stmt->fetch()) {
    // обробка рядка даних
    // приклад:
    echo $row['column_name'];
}
?>
