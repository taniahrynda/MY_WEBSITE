const express = require("express");
const mysql = require("mysql");

const app = express();
const port = 3000;

const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "root",
  database: "website",
});

function getDataFromDatabase() {
  return new Promise((resolve, reject) => {
    connection.query("SELECT * FROM CUSTOMER", (err, results) => {
      if (err) {
        reject(err);
        return;
      }
      resolve(results);
    });
  });
}

app.get("/", (req, res) => {
  const data = getDataFromDatabase();
  data
    .then((results) => {
      res.send(results);
    })
    .catch((err) => {
      res.send("Error fetching data from database");
    });
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
