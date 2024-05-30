<?php include '../api/books.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kindle</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <div class="kindle">
            <div class="screen">
                <div class="screen-content">
                    <div class="header">
                        <a href="index.php">⌂ Home</a>
                        <div class="date">
                            <?= date("H") . "h" . date("i") ?>
                        </div>
                    </div>
                    <h2> Ma liste de livres </h2>
                    <div class="grid-content" id="bookContainer">
                        <?php foreach ($books as $key => $book) : ?>
                            <a href="livre.php?id=<?php echo $key; ?>">
                                <div class="book">
                                    <img src="images/<?php echo $key; ?>.jpg" alt="<?php echo $book['titre']; ?>">
                                </div>
                            </a>
                        <?php endforeach ?>
                    </div>
                    <div class="list-content hidden" id="listContainer">
                        <?php foreach ($books as $key => $book) : ?>
                            <a href="livre.php?id=<?php echo $key; ?>">
                                <div class="books-detail">
                                    <h4><?php echo $book['titre'] ?></h4>
                                    <p><?php echo $book['auteur'] ?></p>
                                    <p><?php echo $book['annee'] ?></p>
                                </div>
                            </a>
                        <?php endforeach ?>
                    </div>
                    <button id="changeViewButton">
                        Changer de vue
                    </button>
                </div>
            </div>
            <h2>Kindle</h2>
        </div>
    </div>
</body>
</html>