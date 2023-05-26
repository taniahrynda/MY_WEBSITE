<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customer Table</title>
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
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Date of Birth</th>
          <th>City</th>
          <th>Phone Number</th>
        </tr>

        <?php foreach ($customers as $row): ?>
          <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['FIRSTNAME']; ?></td>
            <td><?php echo $row['LASTNAME']; ?></td>
            <td><?php echo $row['EMAIL']; ?></td>
            <td><?php echo $row['GENDER']; ?></td>
            <td><?php echo $row['DATE_BIRTH']; ?></td>
            <td><?php echo $row['CITY']; ?></td>
            <td><?php echo $row['PHONE_NUMBERS']; ?></td>
          </tr>
        <?php endforeach; ?>

      </table>
    <?php endif; ?>
  </body>
</html>