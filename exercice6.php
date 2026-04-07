<?php
/*
 * ÉNONCÉ :
 * Importer votre classe Book de l'exercice 1.
 * Créez une classe Library qui gère un tableau de livres (Book).
 * Ajoutez une méthode pour ajouter un livre, 
 * Ajouter une méthode pour afficher tous les livres
 * Ajouter une méthode pour compter le nombre de livres.
 * Instanciez une bibliothèque, ajoutez des livres et affichez-les.
 * Afficher le nombre total de livres dans la bibliothèque.
*/
require_once 'exercice1.php';

class Library {
    protected array $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function displayBooks() {
        foreach ($this->books as $book) {
            echo $book->displayInfo() . "\n";
        }
    }

    public function countBooks() {
        return count($this->books);
    }
}

$library = new Library();
$library->addBook(new Book("The Great Gatsby", "F. Scott Fitzgerald", 10.99));
$library->addBook(new Book("To Kill a Mockingbird", "Harper Lee", 8.99));
$library->addBook(new Book("1984", "George Orwell", 9.99));
echo "Books in Library:\n";
$library->displayBooks();
echo "Total number of books: " . $library->countBooks() . "\n";
