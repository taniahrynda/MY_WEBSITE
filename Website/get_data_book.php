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
    <?php endif; ?>
  </body>
</html>