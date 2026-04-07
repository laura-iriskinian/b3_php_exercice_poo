<?php
/*
 * ÉNONCÉ :
 * Créez une classe Book avec les propriétés protected title, author, et price.
 * Ajoutez une méthode displayInfo() qui affiche les informations du livre.
 * Instanciez un livre et affichez ses informations.
*/
class Book {
    protected $title;
    protected $author;
    protected $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function displayInfo() {
        return "Title: " . $this->title . "\n" .
                "Author: " . $this->author . "\n" .
                "Price: " . $this->price . "€\n";
    }
}

$book = new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99);
echo $book->displayInfo();