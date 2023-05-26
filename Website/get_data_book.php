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
          <th>Назва</th>
          <th>Категорія</th>
          <th>Мова </th>
          <th>Формат</th>
          <th>Ім’я автора</th>
          <th>Прізвище автора</th>
          <th>Видавництво</th>
          <th>Рік публікації</th>
          <th>Опис</th>
          <th>Ціна</th>
        </tr>

        <?php foreach ($customers as $row): ?>
          <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['NAME']; ?></td>
            <td><?php echo $row['TYPE_OF_BOOK']; ?></td>
            <td><?php echo $row['LANGUAGE_BOOK']; ?></td>
            <td><?php echo $row['FORMAT_BOOK']; ?></td>
            <td><?php echo $row['FIRSTNAME']; ?></td>
            <td><?php echo $row['LASTNAME']; ?></td>
            <td><?php echo $row['NAME']; ?></td>
            <td><?php echo $row['YEAR_PUBLICATION']; ?></td>
            <td><?php echo $row['DESCRIPTION_BOOK']; ?></td>
            <td><?php echo $row['PRICE']; ?></td>
          </tr>
        <?php endforeach; ?>

      </table>

      <button id="deleteButton">Видалити</button>

<div id="deleteForm" style="display: none;">
  <h3>Видалення товару</h3>
  <form action="delete_book.php" method="POST">
  
    <input class = "sign_text" type="text" name="product_id"  placeholder="Введіть ID товару, який хочети видалити" required><br>

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



<button id="addButton">Додати товар</button>

<div id="addForm" style="display: none;">
  <h3>Додавання товару</h3>
  <form action="add_product.php" method="POST">
    <input class="sign_text" type="text" name="name_book" placeholder="Введіть назву книги" required><br>
    <input class="sign_text" type="text" name="category_id" placeholder="Введіть ID категорії" required><br>
    <input class="sign_text" type="text" name="author_id" placeholder="Введіть ID автора" required><br>
    <input class="sign_text" type="text" name="publication_id" placeholder="Введіть ID видавництва" required><br>
    <input class="sign_text" type="date" name="year_pub" placeholder="Введіть рік видавництва" required><br>
    <input class="sign_text" type="text" name="description" placeholder="Введіть опис товару" required><br>
    <input class="sign_text" type="text" name="price_book" placeholder="Введіть ціну товару" required><br>
    <input type="submit" value="Підтвердити додавання товару" />
  </form>
</div>

<script>
  var addButton = document.getElementById("addButton");
  var addForm = document.getElementById("addForm");

  addButton.addEventListener("click", function() {
    addForm.style.display = "block";
  });
</script>

<button id="updateButton">Оновити</button>

<div id="updateForm" style="display: none;">
  <h3>Видалення товару</h3>
  <form action="update_book.php" method="POST">
  
    <input class = "sign_text" type="text" name="product_id"  placeholder="Введіть ID товару, який хочети видалити" required><br>
    <input class = "sign_text" type="text" name="price_book"  placeholder="Введіть нову ціну товару" required><br>

    <input type="submit" value="Підтвердити оновлення" />
  </form>
</div>

<script>
  var deleteButton = document.getElementById("updateButton");
  var deleteForm = document.getElementById("updateForm");

  deleteButton.addEventListener("click", function() {
    deleteForm.style.display = "block";
  });
</script>
    <?php endif; ?>
  </body>
</html>
