<?php
include_once("model/Book.php");

class Model {
    public function getBookList()
    {
        return array(
            "Romeo and Juliet" => new Book("Romeo and Juliet", "William Shakespeare", "A classic book."),
            "Pride and Prejudice" => new Book("Pride and Prejudice", "Jane Austen", ""),
            "Animal Farm" => new Book("Animal Farm", "George Orwell", "")
        );
    }

    public function getBook($title)
    {
        $allBooks = $this->getBookList();
        return $allBooks[$title];
 }
}