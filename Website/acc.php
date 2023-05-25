<?php
session_start();

if (!isset($_SESSION['customer_id'])) {
    // Якщо користувач не аутентифікований, перенаправлення на сторінку входу або додати власну логіку перенаправлення
    header('Location: login.php');
    exit;
}

$customerID = $_SESSION['customer_id'];

$mysql = new mysqli('localhost', 'root', '', 'website');
$result = $mysql->query("SELECT * FROM `customer` WHERE `ID`= '$customerID'");
$user = $result->fetch_assoc();

if (count($user) == 0) {
    echo "Помилка отримання даних користувача";
    exit();
}

$mysql->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Особистий кабінет</title>
    <style>
        /* Стилі для макету сторінки акаунту */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .user-info {
            margin-top: 20px;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .user-info h2 {
            margin-bottom: 10px;
        }

        .user-info p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Особистий кабінет</h1>

        <div class="user-info">
            <h2>Вітаємо, <?php echo $user['FIRSTNAME'] . ' ' . $user['LASTNAME']; ?>!</h2>
            <p>Електронна пошта: <?php echo $user['EMAIL']; ?></p>
            <p>Пароль: <?php echo $user['PASS_WORD']; ?></p>
            <p>Стать: <?php echo $user['GENDER']; ?></p>
            <p>Дата народження: <?php echo $user['DATE_BIRTH']; ?></p>
            <p>Місто: <?php echo $user['CITY']; ?></p>
            <p>Номер телефону: <?php echo $user['PHONE_NUMBERS']; ?></p>
            <p>Номер телефону: <?php echo $user['PHONE_NUMBERS']; ?></p>
        
        </div>
    </div>
</body>
</html>

