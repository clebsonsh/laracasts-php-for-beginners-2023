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
  [
    "name" => "The Martian",
    "author" => "Andy Weir",
    "purchaseUrl" => "http://example.com/book/4",
    "releaseYear" => 2011,
  ],
];

$filteredBooks = array_filter(
  $books,
  fn ($book) => $book["releaseYear"] >= 1950 && $book["releaseYear"] < 2020
);

require "index.view.php";
