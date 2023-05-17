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

module.exports = connection;
