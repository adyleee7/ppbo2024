<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author();
$author-> name = "Tere Liye";
$author-> description = "Penulis";

$book = new Book();
$book-> ISBN = "83998";
$book-> title = "Pulang";
$book-> description = "Menceritakan tentang";
$book-> category = "Non Fiksi";
$book-> language = "Bahasa Indonesia";
$book-> numberOfPages = 254;
$book-> author = "Tere Liye";
$book-> publisher = "Gramedia";

$publisher = new Publisher();
$publisher-> name = "Gramedia";
$publisher-> address = "Senayan City";

print_r($book-> showAll());