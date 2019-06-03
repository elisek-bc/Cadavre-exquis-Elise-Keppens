<?php
/**
 * Los de fouten op, zodat je op deze pagina 10 comments met een score ziet staan
 */

$databaseHost = "mysqlhost";
$databaseName = "stackoverflow";
$databaseUser = "stackoverflow";
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
      $sql = "SELECT * FROM `comments` WHERE `vote_score` > 0 LIMIT 10";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($comments as $comment) {
        echo '<li>';
        echo $comment['comment'] . ' (score: ' . $comment['score'] . ')';
        echo '</li>';
      }
      ?>
    </ol>
  </body>
</html>
