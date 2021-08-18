<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <?php
            require_once('../database/database.php');
            $id = $_GET['id'];
            $book = selectOneBook($id);
            foreach($book as $book):
        ?>
        <form action="update_model.php" method="post">
            <input type="hidden" value="<?= $book['book_id'] ?>" name="bookId">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Title" name="title" value="<?= $book['title'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" value="<?= $book['price'] ?>">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('../partial/footer.php'); ?>