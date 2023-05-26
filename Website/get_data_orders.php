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
          <th>Книга</th>
          <th>Прізвище працівника</th>
          <th>Прізвище клієнта</th>
          <th>Ім’я клієнта</th>
          <th>Кількість</th>
          <th>Дата замовлення</th>
          <th>Сума замовлення</th>
          
         
        </tr>

        <?php foreach ($customers as $row): ?>
          <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['NAME']; ?></td>
            <td><?php echo $row['LASTNAME']; ?></td>
            <td><?php echo $row['FIRSTNAME']; ?></td>
            <td><?php echo $row['LASTNAME']; ?></td>
            <td><?php echo $row['NUMBERS']; ?></td>
            <td><?php echo $row['DATE_ORDER']; ?></td>
            <td><?php echo $row['AMOUNT']; ?></td>
           
          </tr>
        <?php endforeach; ?>

      </table>
    <?php endif; ?>
  </body>
</html>