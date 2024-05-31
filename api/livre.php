<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kindle</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="container">
        <div class="kindle">
            <div class="screen">
                <div class="screen-content">
                    <div class="header">
                        <a href="/">⌂ Home</a>
                        <div class="date">
                            <?= date("H") . "h" . date("i") ?>
                        </div>
                    </div>
                    <div class="book-content">
                        <?php
                        // Récupère l'id du livre depuis le paramètre GET
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            // Vérifie si le fichier du livre existe avant de l'inclure
                            $livre_path = __DIR__ . "/../livres/$id.php";
                            if (file_exists($livre_path)) {
                                include $livre_path;
                            } else {
                                echo "Livre non trouvé.";
                            }
                        } else {
                            echo "Aucun livre sélectionné";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <h2>Kindle</h2>
        </div>
    </div>
</body>
</html>