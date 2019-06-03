<?php
/**
 * In dit voorbeeld halen we 10 users op uit de users tabel
 * en tonen we het resultaat mbv var_dump
 * > welk datatype heeft $users?
 * > welk datatype (volledig) heeft elk element in $users?
 */

$databaseHost = "localhost";
$databaseName = "stackoverflow";
$databaseUser = "stackuser";
$databasePassword = "stackpass";

$pdo = new PDO("mysql:host=" . $databaseHost . ";dbname=" . $databaseName, $databaseUser, $databasePassword);
$pdo->exec("SET CHARACTER SET utf8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Macoverflow</title>
  </head>
  <body>
    <pre>
      <?php
      $sql = "SELECT * FROM `users` LIMIT 10";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
      var_dump($users);
      ?>
    </pre>
  </body>
</html>
