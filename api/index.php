<?php 
include dirname(__DIR__).'/books.php';
date_default_timezone_set("Europe/Paris");
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
                        <a href="/index.php">⌂ Home</a>
                        <div class="date">
                        <?= date("H") . "h" . date("i") ?>
                            <!-- 10h25 -->
                        </div>
                    </div>
                    <h2> Ma liste de livres </h2>
                    <div class="grid-content" id="bookContainer">
                        
                        <!-- Mettre le contenu à afficher dans cette div -->
                        <!-- je commence par boucler sur le tableau contenu dans books.php en itérant sur chaque livre contenu 
                        dans le tableau $books -->
                        <?php foreach ($books as $key => $book) : ?>
                            <!-- J'intègre les liens vers les pages dédiées en récupérant l'identifiant du livre comment paramètre GET-->
                            <a href="/livre.php?title=<?php echo $key; ?>">
                                <div class="book">
                                    <!-- Gestion de l'affichage de l'image du livre, le nom de fichier est basé sur la clé du tableau -->
                                    <img src="/images/<?php echo $key; ?>.jpg" alt="<?php echo $book['titre']; ?>">
                                </div>
                            </a>
                        <?php endforeach ?>
                    </div>

                    <div class="list-content hidden" id="listContainer">
                        <?php foreach ($books as $key => $book) : ?>
                            <a href="/livre.php?title=<?php echo $key; ?>">
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
