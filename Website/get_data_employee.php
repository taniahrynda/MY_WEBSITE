<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Table</title>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }

      th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <?php if (isset($customers)): ?>
      <table>
        <tr>
          <th>ID</th>
          <th>Ім’я</th>
          <th>Прізвище</th>
          <th>Посада</th>
          <th>Дана працевлаштування</th>
          <th>Зарплата</th>
          <th>Місто</th>
          <th>Вулиця</th>
         
        </tr>

        <?php foreach ($customers as $row): ?>
          <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['FIRSTNAME']; ?></td>
            <td><?php echo $row['LASTNAME']; ?></td>
            <td><?php echo $row['POSITION']; ?></td>
            <td><?php echo $row['DATE_EMPLOYMENT']; ?></td>
            <td><?php echo $row['RATE']; ?></td>
            <td><?php echo $row['CITY']; ?></td>
            <td><?php echo $row['STREET']; ?></td>
           
          </tr>
      
        <?php endforeach; ?>

      </table>
      <button id="addButton">Додати</button>

<div id="addForm" style="display: none;">
  <h3>Додавання нового працівника</h3>
  <form action="add_employee.php" method="POST">
    <input class="sign_text" type="text" name="ID_emp" placeholder="Введіть ID" required><br>
    <input class="sign_text" type="text" name="firstname" placeholder="Введіть ім’я" required><br>
    <input class="sign_text" type="text" name="lastname" placeholder="Введіть прізвище" required><br>
    <input class="sign_text" type="text" name="position_emp" placeholder="Введіть посаду" required><br>
    <input class="sign_text" type="text" name="office" placeholder="Введіть ID магазину" required><br>
    <input class="sign_text" type="text" name="rate_emp" placeholder="Введіть зарплату" required><br>
    <input type="submit" value="Підтвердити додавання працівника" />
  </form>
</div>
<button id="deleteButton">Видалити</button>

<div id="deleteForm" style="display: none;">
  <h3>Видалення працівника</h3>
  <form action="delete_emp.php" method="POST">
    <input class="sign_text" type="text" name="emp_id" placeholder="Введіть ID працівника, якого хочете видалити" required><br>
    <input type="submit" value="Підтвердити видалення" />
  </form>
</div>

<script>
  var deleteButton = document.getElementById("deleteButton");
  var deleteForm = document.getElementById("deleteForm");

  deleteButton.addEventListener("click", function() {
    deleteForm.style.display = "block";
  });
</script>



<button id="updateButton">Оновити</button>

<div id="updateForm" style="display: none;">
  <h3>Оновлення зарплати працівника</h3>
  <form action="update_emp.php" method="POST">
    <input class="sign_text" type="text" name="product_id" placeholder="Введіть ID працівника" required><br>
    <input class="sign_text" type="text" name="price_book" placeholder="Введіть нову зарплату працівника" required><br>
    <input type="submit" value="Підтвердити оновлення" />
  </form>
</div>

<script>
  var addButton = document.getElementById("addButton");
  var addForm = document.getElementById("addForm");

  addButton.addEventListener("click", function() {
    addForm.style.display = "block";
  });
</script>



<script>
  var updateButton = document.getElementById("updateButton");
  var updateForm = document.getElementById("updateForm");

  updateButton.addEventListener("click", function() {
    updateForm.style.display = "block";
  });
</script>

    <?php endif; ?>
  </body>
</html>