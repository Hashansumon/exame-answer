<?php

class Book {
    // Private properties
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the book title
    public function getTitle() {
        return $this->title;
    }

    // Method to get available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private properties
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the member name
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo "{$this->name} borrowed '{$book->getTitle()}'.\n";
        } else {
            echo "No available copies of '{$book->getTitle()}' for {$this->name} to borrow.\n";
        }
    }

    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
echo "<br>";
$book2 = new Book("To Kill a Mockingbird", 3);
echo "<br>";

$book3 = new Book("New Dimenation of Bangladesh Cricket", 7);

// Create 2 members
$member1 = new Member("John Doe");
echo "<br>";
$member2 = new Member("Jane Smith");
echo "<br>";
$member3 = new Member("Sakib Al Hasan");
echo "<br>";

// Members borrow books
$member1->borrowBook($book1);
echo "<br>";
$member2->borrowBook($book2);
echo "<br>";
$member3->borrowBook($book3);
echo "<br>";
// Print available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "<br>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
echo "<br>";
echo "Available Copies of '{$book3->getTitle()}': {$book3->getAvailableCopies()}\n";

?>
