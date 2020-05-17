<?php
    include_once '../Vjezba/classes/dbh.class.php';
    include_once '../Vjezba/classes/test.class.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}
</style>
</head>
<body>
<table>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <?php
    $testObj = new Test();
    $testObj->getUsers();
    ?>
    </table>
</body>
</html>