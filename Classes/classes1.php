<?php 

class Book
{

    var $title;

    public $author;
}

    
$book1 = new Book;
$book1->title = "Hary Potter";
$book1->author = "Ayume Francis";

echo $book1->author;

?>