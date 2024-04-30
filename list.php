<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Global Styles */

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin: 40px auto;
}

th, td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

th {
  background-color: #f0f0f0;
}

tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:hover {
  background-color: #eee;
}
  </style>
  <title>List Biodata</title>
</head>
<body>
<table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Alamat</th>
    <th>Tempat, Tanggal Lahir</th>
    <th>Jenis-kelamin</th>
    <th>Usia</th>
  </tr>
  <?php
  require_once("db.php");

  $result = mysqli_query($conn, "SELECT * FROM biodata");

  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['nim'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['ttl'] . "</td>";
    echo "<td>" . $row['jk'] . "</td>";
    echo "<td>" . $row['usia'] . "</td>";
    echo "</tr>";
  }

  mysqli_close($conn);
  ?>
</table>
</body>
</html>