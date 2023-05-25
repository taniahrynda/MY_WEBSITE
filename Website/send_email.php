<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Отримати дані з форми
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Налаштування електронної пошти
  $to = "hrundatania@gmail.com"; // Вкажіть вашу електронну адресу
  $subject = "Нове повідомлення з форми зворотнього зв'язку";
  $body = "Ім'я: $first_name\nПрізвище: $last_name\nЕлектрона адреса: $email\nПовідомлення: $message";

  // Відправка електронного листа
  if (mail($to, $subject, $body)) {
    echo "Ваше повідомлення надіслано успішно.";
  } else {
    echo "Під час надсилання повідомлення сталася помилка.";
  }
}
?>
