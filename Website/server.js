const express = require("express");
const mysql = require("mysql");

const app = express();
const port = 3000;

app.use(express.urlencoded({ extended: true })); // Доданий посередник для обробки даних форми

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
app.use(express.static(__dirname + "/Website"));
app.post("/register", (req, res) => {
  const {
    name,
    surname,
    email,
    password,
    gender,
    dateOfBirth,
    city,
    phoneNumber,
  } = req.body;

  // Збереження даних в базі даних
  const query = `INSERT INTO users (FIRSTNAME, LASTNAME, EMAIL, PASS_WORD, GENDER, DATE_BIRTH, CITY, PHONE_NUMBERS)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)`;
  connection.query(
    query,
    [name, surname, email, password, gender, dateOfBirth, city, phoneNumber],
    (err, result) => {
      if (err) {
        console.error("Помилка при збереженні даних:", err);
        res.status(500).send("Виникла помилка при збереженні даних");
      } else {
        console.log("Дані успішно збережено в базі даних");
        res.status(200).send("Дані успішно збережено");
      }
    }
  );
});

// Запуск сервера
app.listen(port, () => {
  console.log(`Сервер запущено на порту ${port}`);
});
