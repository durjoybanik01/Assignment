<?php

class Book {

    // Private properties for title and availableCopies
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book (decrease available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true; // Successfully borrowed
        }
        return false; // No copies available
    }

    // Method to return a book (increase available copies)
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {

    // Private property for name
    private $name;

    // Constructor to initialize the name property
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method for the member to borrow a book
    public function borrowBook($book) {
        $book->borrowBook(); // Borrow the book without printing any messages
    }

    // Method for the member to return a book
    public function returnBook($book) {
        $book->returnBook(); // Return the book without printing any messages
    }
}

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Apply Borrow book method to each member
$member1->borrowBook($book1); // John Doe borrows The Great Gatsby
$member2->borrowBook($book2); // Jane Smith borrows To Kill a Mockingbird

// Print Available Copies with their names
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

?>
