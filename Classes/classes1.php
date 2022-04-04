<?php 

class Book
{

    var $title;

    public $author;

    function __construct($title, $author){
        $this->title = $title;
        $this->author = $author;
    }
}

    
$book1 = new Book("Hary Potter", "Ayume Francis" );

echo $book1->author;

?>