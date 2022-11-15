<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Demo</title>
</head>

<body>
  <h1>Recommended Books</h1>

  <?php
  $books = [
    [

      "name" => "Do Androids Dream of Electric Sheep?",
      "author" => "Philip K. Dick",
      "purchaseUrl" => "http://example.com/book/1",
      "releaseYear" => 1968,
    ],
    [
      "name" => "The Langoliers",
      "author" => "Stephen King",
      "purchaseUrl" => "http://example.com/book/2",
      "releaseYear" => 1990,
    ],
    [
      "name" => "Project Hail Mary",
      "author" => "Andy Weir",
      "purchaseUrl" => "http://example.com/book/3",
      "releaseYear" => 2021,
    ],
  ];
  ?>

  <ul>
    <?php foreach ($books as $book) : ?>
      <li>
        <a href="<?= $book["purchaseUrl"] ?>">
          <?= $book["name"] ?> <small><?= $book["releaseYear"] ?></small>
        </a>
        by <?= $book["author"] ?>
      </li>
    <?php endforeach ?>
  </ul>
</body>

</html>