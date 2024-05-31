<?php
$books = include __DIR__ . '/../books.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kindle</title>
    <link rel="stylesheet" href="/style.css">
    <script src="/script.js"></script>
</head>
<body>
    <div class="container">
        <div class="kindle">
            <div class="screen">
                <div class="screen-content">
                    <div class="header">
                        <a href="/api/index.php">⌂ Home</a>
                        <div class="date">
                            <?= date("H") . "h" . date("i") ?>
                        </div>
                    </div>
                    <h2> Ma liste de livres </h2>
                    <div class="grid-content" id="bookContainer">
                        <?php if (is_array($books) || is_object($books)) : ?>
                            <?php foreach ($books as $key => $book) : ?>
                                <a href="/api/livre.php?id=<?php echo $key; ?>">
                                    <div class="book">
                                        <img src="/images/<?php echo $key; ?>.jpg" alt="<?php echo $book['titre']; ?>">
                                    </div>
                                </a>
                            <?php endforeach ?>
                        <?php else : ?>
                            <p>Aucun livre trouvé.</p>
                        <?php endif ?>
                    </div>
                    <div class="list-content hidden" id="listContainer">
                        <?php if (is_array($books) || is_object($books)) : ?>
                            <?php foreach ($books as $key => $book) : ?>
                                <a href="/api/livre.php?id=<?php echo $key; ?>">
                                    <div class="books-detail">
                                        <h4><?php echo $book['titre'] ?></h4>
                                        <p><?php echo $book['auteur'] ?></p>
                                        <p><?php echo $book['annee'] ?></p>
                                    </div>
                                </a>
                            <?php endforeach ?>
                        <?php else : ?>
                            <p>Aucun livre trouvé.</p>
                        <?php endif ?>
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