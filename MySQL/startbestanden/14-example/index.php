<?php
/**
 * In dit voorbeeld tonen we een user met alle comments die deze geplaatst heeft
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
    <?php
    $sql = "SELECT * FROM `users` WHERE `id` = 2435";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    echo '<header><h1>' . $user['display_name'] . '</h1></header>';
    echo $user['about_me'];
    ?>
    <section>
      <header><h2>Comments by this user</h2></header>
      <?php
      $sql = "SELECT * FROM `comments` WHERE `user_id` = 2435";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
      echo '<ul>';
      foreach($comments as $comment) {
        echo '<li>';
        echo $comment['text'];
        echo '</li>';
      }
      echo '</ul>';
      ?>
    </section>
  </body>
</html>
