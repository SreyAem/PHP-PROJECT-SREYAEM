<?php
/**
 * Connect to database
 */
function db() {
    return new mysqli('localhost', 'root', '', 'bookshop');
}

/**
 * Create new student record
 */
function createBook($value) {
    $title = $value['title'];
    $price = $value['price'];
    $pubdate = $value['datepublish'];
    $image = $value['image_url'];
    $language = $value['language'];
    $author = $value['author'];
    $description = $value['description'];
    $sql = "INSERT INTO books (title, price, publish_date, image, language, author, description) VALUES('$title','$price','$pubdate','$image','$language','$author','$description')";
    db()->query($sql);
    header("Location: ../index.php?page=book");
}

/**
 * Get all data from table student
 */
function selectAllBooks() {
    return db()->query("SELECT * FROM books ORDER BY book_id DESC");
}

/**
 * Get only one on record by id 
 */
function selectOneBook($id) {
    return db()->query("SELECT * FROM books WHERE book_id = $id");
}

/**
 * Delete student by id
 */
function deleteBook($id) {
    db()->query("DELETE FROM books WHERE book_id = $id");

    header("Location: ../index.php?page=book");
}


/**
 * Update students
 */
function updateBook($value) {
    $title = $value['title'];
    $price = $value['price'];
    $date = $value['date'];
    $image = $value['image'];
    $language = $value['language'];
    $author = $value['author'];
    $description = $value['description'];
    $id = $value['bookId'];
    db()->query("UPDATE books SET title = '$title', price = '$price', publish_date = '$date', image = '$image', language = '$language', author = '$author', description = '$description' WHERE book_id = $id");
    header("Location: ../index.php?page=book");
}

/**
 * Create new student record
 */
function createProgram($value) {
    $name = $value['name'];
    $date = date("Y-m-d h:i:sa");
    db()->query("INSERT INTO programming(name, date) VALUES('$name', '$date')");
    header("Location: ../index.php?page=programming");
}

/**
 * Get all data from table student
 */
function selectAllPrograms() {
    return db()->query("SELECT * FROM programming ORDER BY pro_id DESC");
}

/**
 * Get only one on record by id 
 */
function selectOneProgram($id) {
    return db()->query("SELECT * FROM programming WHERE pro_id = $id");
}

/**
 * Delete student by id
 */
function deleteProgram($id) {
    db()->query("DELETE FROM programming WHERE pro_id = $id");

    header("Location: ../index.php?page=programming");
}


/**
 * Update students
 */
function updateProgram($value) {
    $name = $value['name'];
    $date = date("Y-m-d h:i:sa");
    $id = $value['programId'];
    db()->query("UPDATE programming SET name = '$name', date = '$date' WHERE pro_id = $id");
    header("Location: ../index.php?page=programming");
}

