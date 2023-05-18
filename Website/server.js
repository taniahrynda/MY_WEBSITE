const express = require("express");
const mysql = require("mysql");
const path = require("path");

const app = express();
const port = 3000;

app.use(express.urlencoded({ extended: true })); // Доданий посередник для обробки даних форми
app.use(express.static(path.join(__dirname, "Website"))); // Налаштування статичного сервера для віддачі статичних файлів

// Налаштування підключення до бази даних
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
  database: "website",
});

// Підключення до бази даних
connection.connect((err) => {
  if (err) {
    console.error("Помилка підключення до бази даних:", err);
  } else {
    console.log("Підключено до бази даних");
  }
});

// Маршрут для обробки POST-запиту з форми реєстрації
app.post("/register", (req, res) => {
  // Код для обробки POST-запиту
  // ...
});

// Маршрут для головної сторінки
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "index.html"));
});
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "sign.html"));
});
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "about.html"));
});
// Запуск сервера
app.listen(port, () => {
  console.log(`Сервер запущено на порту ${port}`);
});
