<?php

require 'functions.php';
// require 'router.php';

// connect to our MySQL database.
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=laracast;charset=utf8mb4";
$user = 'laracast';
$password = 'password';

$pdo = new PDO($dsn, $user, $password);

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_CLASS);

foreach ($posts as $post) {
  echo '<li>' . $post->title . '</li>';
}
