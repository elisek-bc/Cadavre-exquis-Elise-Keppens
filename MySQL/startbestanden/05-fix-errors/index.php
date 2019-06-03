<?php
/**
 * Los de fouten op, zodat je op deze pagina 5 users ziet staan met leeftijd 30 jaar
 */

$databaseHost = "mysqlhost";
$databaseName = "stackoverflow";
$databaseUser = "stackusername";
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
    <ol>
      <?php
      $sql = "SELECT * FROM `users` WHERE `age` = 30 LIMIT 5";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($users as $user) {
        echo '<li>';
        echo $user['display_name'];
        echo '</li>';
      }
      ?>
    </ol>
  </body>
</html>
