<?php

# 1. Get the Data from the form request
# 2.Load the books and them filter them based on the search term
# 3.Store the results in the SESSION
# 4. Redirect the visitor back to index.php

//require 'Book.php';

session_start();

require 'helpers.php';

use Foobooks0\Book;

//$book = new Book('books.json');

die();

# Get data from form request
$searchTerm = $_POST('searchTerm');
$caseSensitive = isset($_POST['caseSensitive']);

$books = $book->getByTitle($caseSensitive, $searchTerm);

# Store our results data in the SESSION

$_SESSION['results'] = [
    'searchTerm' => $searchTerm,
    'books' => $books,
    'bookCount' => count($books),
    'caseSensitive' => $caseSensitive

];

header('location: index.php');

