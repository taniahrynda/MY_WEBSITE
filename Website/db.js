const mysql = require("mysql");

const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
  database: "website",
});

connection.connect((err) => {
  if (err) {
    console.error("Помилка підключення до бази даних: ", err);
  } else {
    console.log("Підключення до бази даних встановлено");
  }
});
connection.query("SELECT * FROM CUSTOMER", (err, results) => {
  if (err) {
    console.error("Помилка виконання запиту:", err);
    return;
  }
  console.log("Результати SELECT запиту:", results);
  console.log("Результати SELECT запиту:", results[1]["LASTNAME"]);
});

module.exports = connection;
