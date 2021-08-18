<div class="container p-4">
        
        <div class="d-flex justify-content-end p-2">
            <a href="book_model/create_html.php" class="btn btn-primary">Add Book +</a>
        </div>
        <?php 
            require_once('database/database.php');
            $books = selectAllBooks();
            foreach ($books as $book):
        ?>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                        <span><?= $book['date'] ?></span>
                </div>
               <div class="d-flex">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="200" src="<?= $book['image'] ?>" alt="">
                    </div>
                    <div class="info">
                        <h3 ><?= $book['title'] ?> </h3>
                        <p><?= $book['author'] ?></p>
                        <strong><?= $book['price'] ?> $</strong> 
                    </div>
               </div>

                <div class="action d-flex justify-content-end">
                    <a href="book_model/update_html.php?id=<?= $book['book_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="book_model/delete_model.php?id=<?= $book['book_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div> 
        </div>
        <?php endforeach; ?>
    </div>