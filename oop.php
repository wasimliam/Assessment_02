<?php
class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            echo "Sorry, the book '{$this->title}' is not available for borrowing.\n";
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
        echo "The book '{$this->title}' has been returned.\n";
    }
}


class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            echo "{$this->name} has borrowed the book '{$book->getTitle()}'.\n";
        } else {
            echo "{$this->name} cannot borrow the book '{$book->getTitle()}'.\n";
        }
    }


    public function returnBook(Book $book) {
        $book->returnBook();
    }
       

}

// Creating books
$book1 = new Book("Book 1", 3);
$book2 = new Book("Book 2", 2);

// Creating members
$member1 = new Member("Member One");
$member2 = new Member("Member Two");

// Borrowing books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Returning books
$member1->returnBook($book1);

// Displaying available books
echo "Available books:\n";
echo "Book 1: {$book1->getAvailableCopies()} copies\n";
echo "Book 2: {$book2->getAvailableCopies()} copies\n";



?>