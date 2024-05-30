<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kindle</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="kindle">
            <div class="screen">
                <div class="screen-content">
                    <div class="header">
                        <a href="index.php">⌂ Home</a>
                        <div class="date">
                            10h25
                        </div>
                    </div>
                    <div class="book-content">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            include "../livres/$id.php";
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